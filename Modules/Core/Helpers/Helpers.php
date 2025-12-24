<?php 

function increaseMapItem(&$map, $key, $value)
{
    $map[$key] = (@$map[$key] ?: 0) + $value;
    return $map;
}

function subArray($arrayA, $arrayB) {
    foreach ($arrayB as $item) {
        $key = array_search($item, $arrayA); // 找到第一个匹配的值
        if ($key !== false) {
            unset($arrayA[$key]); // 移除该值
        }
    }
    return array_values($arrayA); // 重新索引数组
}

// 传入一个图片数组，组装成一个详情图页面
function generatePage($images)
{
    $page = [
        'style' => [
            'a' => 'b'
        ],
        'modules' => [
            [
                'type' => 'imageList',
                'uuid' => uniqid(),
                'style' => [
                    'a' => 'b'
                ],
                'images' => $images
            ]
        ]
    ];
    return $page;
}

function isPositiveInteger($number) {
    if (!is_numeric($number)) {
        return false;
    }

    $num = intVal($number);

    if ($num != $number) {
        return false;
    }

    if ($num <= 0) {
        return false;
    }

    return $num;
}


function splitInteger($number, $parts) {
    // 确保$parts不为零
    if ($parts == 0) {
        return false;
    }

    // 初始化数组来存储每份的随机值
    $result = array();

    for ($i = 0; $i < $parts; $i++) {
        // $remain = $number - $total;
        // $remainTime = $parts - $i;

        // $randomValue = @mt_rand(floor($remain/($remainTime+2)), floor($remain/$remainTime)) ?: 0;
        // if ($randomValue <= 0) {
        //     $randomValue = 1;
        // }
        
        $result[] = 1;
        // $total += $randomValue;
    }

    for ($i = 0; $i < $number - $parts; $i++) {
        // $remain = $number - $total;
        // $remainTime = $parts - $i;

        // $randomValue = @mt_rand(floor($remain/($remainTime+2)), floor($remain/$remainTime)) ?: 0;
        // if ($randomValue <= 0) {
        //     $randomValue = 1;
        // }


        
        $result[rand(0, $parts-1)] += 1;
        // $total += $randomValue;
    }

    // // 计算总数
    // $total = 0;

    // // 生成随机值，并将其累加到总数中
    // for ($i = 0; $i < $parts; $i++) {
    //     $remain = $number - $total;
    //     $remainTime = $parts - $i;

    //     $randomValue = @mt_rand(floor($remain/($remainTime+2)), floor($remain/$remainTime)) ?: 0;
    //     if ($randomValue <= 0) {
    //         $randomValue = 1;
    //     }
        
    //     $result[] = $randomValue;
    //     $total += $randomValue;
    // }

    // // 最后一份的值是剩余的数值
    // $luckIndex = rand(0, $parts-1);
    // $result[$luckIndex] = $result[$luckIndex] + ($number - $total);

    return $result;
}

function minimumFieldValue($array, $field)
{
    $minimum = $array[0][$field];

    foreach ($array as $item) {
        $minimum = $minimum > $item[$field] ? $item[$field] : $minimum; 
    }

    return $minimum;
}

// 获取当前毫秒时间
function getMillisecond() {
    list($microsecond , $time) = explode(' ', microtime()); //' '中间是一个空格
    return (float)sprintf('%.0f',(floatval($microsecond)+floatval($time))*1000);
}


// 是否是手机号
function isPhone($str)
{
    return preg_match("/^1\d{10}$/", $str);
}

// 是否是订单号
function isOrderNumber($str)
{
    return preg_match("/^[A-Z]\d{16,25}$/", $str);
}

function now()
{
    return date('Y-m-d H:i:s');
}

// 如果$value为负数返回0，正数则返回其本身
function getUnsignedNumber($value)
{
    return $value < 0 ? 0 : $value;
}

// 计算两个数之间的差值，如果少于0则返回0
function subtractOrZero($left, $right)
{
    $diff = ($left ?: 0) - ($right ?: 0);
    return $diff <= 0 ? 0 : $diff;
}

function v() 
{
	$args = func_get_args();
	foreach ($args as $key => $arg) {
		if (!empty($arg) || $arg === 0) {
			return $arg ;
		}
	}
	return NULL ;
}

function unsetKey($arr, $keys)
{
    foreach ($keys as $item) {
        unset($arr[$item]);
    }
    return $arr;
}


// 根据概率来排除odds
function filterSkusWithOdds($collection, $oddsLine  = 10) {
    $oddsSum = $collection->sum('odds');
    $salesSum = $collection->sum('sales');

    if (!$oddsSum || !$salesSum) {
        return $collection;
    }

    return $collection->filter(function ($sku) use ($oddsLine, $salesSum, $oddsSum) {
        if ($sku->odds > $oddsLine) {
            return true;
        }

        $realOdds = $sku->sales / $salesSum;
        $planOdds = $sku->odds / $oddsSum;
        if ($realOdds >= $planOdds) {
            return false;
        }
        else {
            return true;
        }
    });
}


// 从一个带权重的集合中随机抽取特定数量的元素
// $total 为要抽取的幸运元素数量
// 不允许重复
function pickLuckySku($collection, $weightKey, $total)
{
    $newCollection = deepCopy($collection);

    $res = [];

    for ($i=0; $i < $total; $i++) { 
        $weightSum = $newCollection->sum($weightKey) * 100;
        $randNumber = rand(0, $weightSum);

        $sum = 0;
        foreach ($newCollection as $key => $item) {
            $odds = is_array($item) ? $item[$weightKey] : $item->$weightKey;
            $sum += ($odds ?: 0) * 100;
            if ($sum >= $randNumber) {
                // 此item中奖 
                // 提出集合
                $newCollection->splice($key, 1);
                array_push($res, $item);
                break;
            }
        }
    }

    if ($total === 1) {
        return @$res[0];
    }
    else {
        return $res;
    }
}

// 从一个带权重的集合中随机抽取特定数量的元素
// $total 为要抽取的幸运元素数量
// $weightKey 为要计算的概率权重字段
// 允许重复
function pickLuckySkuMaps($skus, $weightKey, $total)
{
    $bakupSkus = $skus;

    $luckyList = [];

    // 缓存起stock
    $skus->each(function ($item) {
        $item->_cached_stock = $item->_cached_stock ?: $item->stock;
    });

    // 抽多个
    $luckyTotal = 0;
    while ($luckyTotal < $total && $skus->sum('_cached_stock') > 0) { 

        // 从0到权重总和之间随机抽出一个数字
        $random = rand(1, $skus->where('_cached_stock', '>', 0)->sum($weightKey) * 100);

        // 已累加的随机数
        $randSum = 0; 
        foreach ($skus as $key => $sku) {

            // 算出已累计的随机数
            $randSum += ($sku->$weightKey ?: 0) * 100;  

            // 这个物品在随机数的范围内且有库存
            if (($randSum >= $random) && ($sku->_cached_stock > 0)) {
                $luckyList[$sku->uuid] = (@$luckyList[$sku->uuid] ?: 0) + 1;
                $luckyTotal ++;

                $skus[$key]->_cached_stock -= 1;
                break;
            }
        }
    }

    // 删除缓存的stock
    $skus->each(function ($item) {
        unset($item->_cached_stock);
    });

    if ($luckyTotal < $total) {
        return false;
    }

    $list = [];
    foreach ($luckyList as $uuid => $total) {
        array_push($list, [
            'skuable' => $bakupSkus->where('uuid', $uuid)->first(),
            'total' => $total
        ]);
    }

    return $list;
}


function checkEmptyStr($str) {
    return $str === null || strlen($str) === 0;
}



function getAVideoDuration($url)
{
    $info = file_get_contents($url . '?avinfo');
    $info = json_decode($info);
    return intVal($info->format->duration);
}

function firstChar($s0) {
    $fchar = ord($s0[0]);
    if($fchar >= ord("A") and $fchar <= ord("z") )return strtoupper($s0[0]);
    $s1 = iconv("UTF-8","gb2312", $s0);
    $s2 = iconv("gb2312","UTF-8", $s1);
    if($s2 == $s0){$s = $s1;}else{$s = $s0;}
    $asc = ord($s[0]) * 256 + ord($s[1]) - 65536;
    if($asc >= -20319 and $asc <= -20284) return "A";
    if($asc >= -20283 and $asc <= -19776) return "B";
    if($asc >= -19775 and $asc <= -19219) return "C";
    if($asc >= -19218 and $asc <= -18711) return "D";
    if($asc >= -18710 and $asc <= -18527) return "E";
    if($asc >= -18526 and $asc <= -18240) return "F";
    if($asc >= -18239 and $asc <= -17923) return "G";
    if($asc >= -17922 and $asc <= -17418) return "H";
    if($asc >= -17922 and $asc <= -17418) return "I";
    if($asc >= -17417 and $asc <= -16475) return "J";
    if($asc >= -16474 and $asc <= -16213) return "K";
    if($asc >= -16212 and $asc <= -15641) return "L";
    if($asc >= -15640 and $asc <= -15166) return "M";
    if($asc >= -15165 and $asc <= -14923) return "N";
    if($asc >= -14922 and $asc <= -14915) return "O";
    if($asc >= -14914 and $asc <= -14631) return "P";
    if($asc >= -14630 and $asc <= -14150) return "Q";
    if($asc >= -14149 and $asc <= -14091) return "R";
    if($asc >= -14090 and $asc <= -13319) return "S";
    if($asc >= -13318 and $asc <= -12839) return "T";
    if($asc >= -12838 and $asc <= -12557) return "W";
    if($asc >= -12556 and $asc <= -11848) return "X";
    if($asc >= -11847 and $asc <= -11056) return "Y";
    if($asc >= -11055 and $asc <= -10247) return "Z";
    return NULL;
}

// 按IP检索该ip所在城市等位置
function getIpLocation($ip) {
    $jsonStr = file_get_contents('https://api-app.hquesoft.com/ip-location?ip=' . $ip . '&domain=' . $_SERVER["HTTP_HOST"]);
    return @json_decode($jsonStr, true)['data'] ?: [
        'city' => NULL,
        'province' => NULL,
        'country' => NULL
    ];
}


function copyAttrs(&$target, $origin, Array $attrs) {
    if (is_array($origin))
        $origin = json_decode(json_encode($origin));

    foreach ($attrs as $key => $attr) {
        if (!is_null(@$origin->$attr))
            @$target[$attr] = $origin->$attr;
    }
}

function filtList($list,  $only) {
    return arrayFilter($list->toArray(), [
        '*' =>  $only
    ]);
}

function deepCopy($obj)
{
    return unserialize(serialize($obj));
}

function arrayFilter($array, $only) {
    if (!$only || !is_array($array)) {
        return $array;
    }

    $result = [];

    $levelOne = [];
    $levelTwo = [];

    $replace = [];

    foreach ($only as $key => $value) {
        if (is_array($value)) {
            $levelTwo[$key] = $value;
        } else {
            array_push($levelOne, $value);
            if (is_string($key)) {
                $replace[$key] = $value;
                array_push($levelOne, $key);
            }
        }
    }

    if (count($levelOne) > 0) {
        $result = collect($array)->only($levelOne)->all();
    }

    if (count($levelTwo) > 0) {
        foreach ($levelTwo as $key => $levelTwoOnly) {
            if ($key === '*') {
                foreach ($array as $k => $v) {
                    $result[$k] = arrayFilter($v, $levelTwoOnly);
                }
            } elseif (isset($array[$key])) {
                $result[$key] = arrayFilter($array[$key], $levelTwoOnly);
            } 
        }
    }

    foreach ($replace as $key => $value) {
        if(isset($result[$key])) {
            $result[$value] = $result[$key];
            unset($result[$key]);
        }
    }

    return $result;
}

?>
