<?php
//creating functions with PHP
function welcome(){
    echo "Welcome!";
}

welcome();
echo "<hr>";
function welcomeTwo($user){
    $frase = "Bem vindo, $user <br>";
    return $frase;
}

$user = "Rafael";
welcomeTwo($user);
welcomeTwo("Fernando");

function result($grade1, $grade2, $grade3, $student = "Student"){
    if (is_numeric($grade1)  and is_numeric($grade2) and is_numeric($grade3)) {
    
        $avg = ($grade1 + $grade2 + $grade3) / 3;
        $avg = round($avg, 2);
        if ($avg >= 7){
            $avg = str_replace (".", ",", $avg);
            $res = "$student is approved with average: $avg";
        } else if($avg <= 5){
            $avg = str_replace (".", ",", $avg);
            $res = "$student failed with average: $avg";
        } else{
            $avg = str_replace (".", ",", $avg);
            $res = "$student is in recovery with average: $avg";
        }
    } else{
        $res = "Fill in the grades correctly";
    }
    return $res;
}

$grade1 = "5.560532";
$grade2 = 8.8;
$grade3 = 9;
$student = "Cristian";
echo result($grade1, $grade2, $grade3, $student) . "<br>";
echo result(3, 5, 3) . "<br>";
echo result(6, 7, 5) . "<br>";

function list_($list_, $ordem = "asc"){
    if (is_array($list_) and !empty($list_)){

        $list_ = array_map("ucfirst", $list_);
        $ordem == "desc" ? arsort($list_) : asort($list_);
        
        $res = "<ul>";
        foreach ($list_ as $item){
            $res .= "<li> $item </li>";
        }
        $res .= "</ul>";
    } else{
        $res = "Insert a valid list! <br>";
    }
    return $res;
}
$fruits = ["Orange", "Strawberry", "grape", "banana", "Pineapple"];
$test = array();
echo list_($fruits);
echo list_($fruits, "desc");
echo list_($test);