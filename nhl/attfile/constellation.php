
  	<meta charset="utf-8">

<?php

function birthext($birth)
{
    if (strstr ( $birth, '-' ) === false && strlen ( $birth ) !== 8)
        $birth = date ( "Y-m-d", $birth );
    if (strlen ( $birth ) === 8)
    {
        if (eregi ( '([0-9]{4})([0-9]{2})([0-9]{2})$', $birth, $bir ))
            $birth = "{$bir[1]}-{$bir[2]}-{$bir[3]}";
    }
     
    if (strlen ( $birth ) < 8)
        return false;
     
    $tmpstr = explode ( '-', $birth );  
    if (count ( $tmpstr ) !== 3)
        return false;
     
    $y = ( int ) $tmpstr [0];
    $m = ( int ) $tmpstr [1];
    $d = ( int ) $tmpstr [2];
    $result = array ();
    $xzdict = array ('摩羯', '水瓶', '双鱼', '白羊', '金牛', '双子', '巨蟹', '狮子', '处女', '天秤', '天蝎', '射手' );
    $zone = array (1222, 122, 222, 321, 421, 522, 622, 722, 822, 922, 1022, 1122, 1222 );
    if ((100 * $m + $d) >= $zone [0] || (100 * $m + $d) < $zone [1])
    {
        $i = 0;
    }
    else
    {
        for($i = 1; $i < 12; $i ++)
        {
            if ((100 * $m + $d) >= $zone [$i] && (100 * $m + $d) < $zone [$i + 1])
                break;
        }
    }
    $result ['xz'] = $xzdict [$i] . '座';    
    $gzdict = array (array ('甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸' ), array ('子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥' ) );
    $i = $y - 1900 + 36;
    $result ['gz'] = $gzdict [0] [($i % 10)] . $gzdict [1] [($i % 12)]; 
    $sxdict = array ('鼠', '牛', '虎', '兔', '龙', '蛇', '马', '羊', '猴', '鸡', '狗', '猪' );
    $result ['sx'] = $sxdict [(($y - 4) % 12)];
    return $result;
}
/*
$arr = birthext ( '474768000' ); //时间戳
print_r ( $arr );
$arr = birthext ( '1985-08-17' );
print_r ( $arr );
$arr = birthext ( '19850117' );
print_r ( $arr );
?>
*/