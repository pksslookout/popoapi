<?php

namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Redis as Redis;
// use Redis ;
use Modules\Core\Entities\ImportCollection;

use Cache;
use ThrowException;
use Maatwebsite\Excel\Facades\Excel;


class ImportService
{
    // 单行作为一个object返回
    static public function mapArray($file, $checkHeader, $mapKey, $format = NULL)
    {
        list($header, $array) = static::toArray($file, $checkHeader, $format);

        // return $array;

        // 对表头进行映射
        if ($mapKey) {
            // 如果是数字
            if (array_keys($mapKey)[0] === 0) {
                foreach ($mapKey as $index => $newKey) {
                    $header[$index] = $newKey;
                }
            }
            else {
                foreach ($mapKey as $key => $newKey) {
                    $index = array_search($key, $header);
                    if ($index > -1) {
                        $header[$index] = $newKey;
                    }
                }
            }
        }

        // \Log::error($header);
        // \Log::error($array);
        // \Log::error($mapKey);

        $res = array_map(function ($item) use ($header) {

            $res = [];

            foreach ($item as $key => $value) {
                $res[$header[$key]] = $value;

                // 纯字符串作为key
                // if (is_string($header[$key]))
                //     $res[$header[$key]] = $value;
                // else {
                //     // function 映射处理 
                //     $fun = $header[$key]
                //     $res[$key] = $fun($value);
                // }
            }

            return $res;

            $res = [];

            // 进行行映射
            $i = 0;
            foreach ($header as $index => $key) {

                if (is_int($index))
                    $res[$key] = $item[$i];
                else {
                    // function 映射处理 , 此时$key为function
                    $res[$index] = $key($item[$i]);
                }

                $i ++;
            }

            return $res;
        }, $array);

        return $res;
    }

    // 简单模式导入
    static public function toArray($file, $checkHeader = false, $format = NULL)
    {
        // $array = Excel::toArray(new ImportCollection(), $file)[0];
        $isTxtFormat = false;

        $fileName = $file;
        if (is_object($file)) {
            $fileName = $file->getClientOriginalName();
        }

        // txt类型文件需要指定处理类型
        if (substr($fileName, -4) === '.txt') {
            $format = \Maatwebsite\Excel\Excel::TSV;
        }

        if ($format == \Maatwebsite\Excel\Excel::TSV) 
        {
            $isTxtFormat = true;
        }

        $array = Excel::toArray(new ImportCollection(), $file, null, $format)[0];

        if ($isTxtFormat) {
            $array = array_map(function ($item) {
                return explode("\t", $item[0]);
            }, $array);
        }

        if (count($array) <= 1)
            ThrowException::Conflict('上传文件内容为空');

        $header = $array[0];
        
        if ($checkHeader) {
            foreach ($checkHeader as $key => $headerTitle) {
                if (@$header[$key] !== $headerTitle) 
                    ThrowException::Conflict('上传文件格式不正确,请检查后重新上传');
            }
        }

        array_shift($array);

        return [
            $header, 
            $array
        ];
    }
}
