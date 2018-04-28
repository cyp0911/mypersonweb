<?php
function get_constellation($month, $day) {
// 检查参数有效性 
if ($month < 1 || $month > 12 || $day < 1 || $day > 31) return false;

// 星座名称以及开始日期
$constellations = array(
array( "20" => "宝瓶座"),
array( "19" => "双鱼座"),
array( "21" => "白羊座"),
array( "20" => "金牛座"),
array( "21" => "双子座"),
array( "22" => "巨蟹座"),
array( "23" => "狮子座"),
array( "23" => "处女座"),
array( "23" => "天秤座"),
array( "24" => "天蝎座"),
array( "22" => "射手座"),
array( "22" => "摩羯座")
);

list($constellation_start, $constellation_name) = each($constellations[(int)$month-1]);

if ($day < $constellation_start) list($constellation_start, $constellation_name) = each($constellations[($month -2 < 0) ? $month = 11: $month -= 2]);

return $constellation_name;
}


function get_animal($birth_year)

{

//1900年是子鼠年

$animal = array(

'子鼠','丑牛','寅虎','卯兔','辰龙','巳蛇',

'午马','未羊','申猴','酉鸡','戌狗','亥猪'

);

$my_animal = ($birth_year-1900)%12;

return $animal[$my_animal];

}

function get_age($birth_year,$birth_month,$birth_date)

{

$now_age = 1; //实际年龄，以出生时为1岁计

$full_age = 0; //周岁，该变量放着，根据具体情况可以随时修改

$now_year = date('Y',time());

$now_date_num = date('z',time()); //该年份中的第几天

$birth_date_num = date('z',mktime(0,0,0,$birth_month,$birth_date,$birth_year));

$difference = $now_date_num - $birth_date_num;

if ($difference > 0)

{

$full_age = $now_year - $birth_year;

}

else

{

$full_age = $now_year - $birth_year - 1;

}

$now_age = $full_age + 1;

return $now_age;

}

//get your next age
function next_age($age){
    if (date('j', time()) >= date('j', strtotime($birthday))){  
			return $age; } 	
    else{    		$age=$age+1;

    return $age;} 
} 
	


?>