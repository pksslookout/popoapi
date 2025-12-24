<?php 
namespace Modules\Core\Traits;
use \Modules\Core\Entities\Device;

use Auth;
use DB;

trait DeviceMarkable
{
	// 所属设备
	public function device() 
	{
		return $this->belongsTo('\Modules\Core\Entities\Device', 'device_id');
	}

	// 平台类型
	public function scopePlatformType($query, $type)
    {
    	// return $query;
        return $query->whereHasIn('device', function ($q) use ($type) {
        	return $q->where('platform_type', $type);
        });
    }

	// 绑定设备
	public function markDevice()
	{
		$info = Auth::deviceInfo();

		$device = Device::where($info)->first();

		if (!$device) {
			$device = Device::create($info);
		}

		$this->device_id = $device->id;
		$this->save();
	}
}
?>