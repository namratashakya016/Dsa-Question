<?php

function findLargest($arr){
    // sort($arr);
    // end($arr);

    // print_r(max($arr));

    $assumeFirstElem=$arr[0];
    foreach($arr as $elem){
        if($assumeFirstElem < $elem){
            $assumeFirstElem=$elem;
        }
    }
    // echo $assumeFirstElem;
}
$arr=array(5,7,3,3,8,9);
findLargest($arr);


function findSecondLargest($arr) {
    if ($arr === null || count($arr) < 2) {
        echo "Array should have at least two elements.\n";
        return;
    }

    $flargest=PHP_INT_MIN; //-2147483648 and 2147483647
    $secLargest=PHP_INT_MIN;
    
    foreach ($arr as $key => $value) {
        if ($value > $flargest) {
            $secLargest=$flargest;
            $flargest=$value;
        } 
        if($value > $secLargest && $value > $flargest){
            $secLargest=$value;
        }
    }
    return $secLargest;

}
print_r(findSecondLargest($arr));

function reverseArr($arr){

    $resultArr=[];
    $arrLen= count($arr);
    for ($i=$arrLen-1; $i >= 0 ; $i--) { 
        array_push($resultArr,$arr[$i]);
    }
    return $resultArr;
}
print_r(reverseArr($arr));

function reverseString($str){

    $resultStr="";
    $arrLen= strlen($str);
    for ($i=$arrLen-1; $i >= 0 ; $i--) { 
        $resultStr.=$str[$i];
    }
    return $resultStr;
}
$str="Hello";
print_r(reverseString($str));

function isSortArr($arr) {
    $n=count($arr);
    for ($i=0; $i < $n-1 ; $i++) { 
        if ($arr[$i] > $arr[$i+1]) {
            return false;
        } 
    }
    return true;
    
}
$arr=array(5,7,3,3,8,9);
$arr=array(1,2,3,4);

if(isSortArr($arr)){
    echo "array is sorted";
}else{
    echo "array is not sorted";
}

function factorialNum($num) {
    // $factRes=1;
    // for ($i=$num; $i >= 1 ; $i--) { 
    //     $factRes = $i * $factRes;       
    // }
    // echo $factRes;

    if ($num <=1 ) {
        return 1;
    }
    return $num * factorialNum($num-1);
}
$num=3;
print_r(factorialNum($num));

function isPanlindromStr($str) {
    $n=strlen($str)-1;
    $reverse='';
    for ($i=$n; $i >= 0 ; $i--) {
        $reverse.=$str[$i];        
    }

    if($reverse==$str){
        echo "Is palindrome";
    }else{
        echo "Is not palindrome";
    }
}
$str="madam";
isPanlindromStr($str);

function findMissingNumber($arr,$n){
    $expectedSum=($n*($n+1))/2;
    $sumOfArr= array_sum($arr);

    return $expectedSum-$sumOfArr;
    
}
$arr=array(1,3,4);
$n=4;
print_r(findMissingNumber($arr,$n));

function fibonacciSeries($a){
    $n1=0;
    $n2=1;
    echo $n1.' '.$n2.' '; // 0 1
    for ($i=0; $i < $a; $i++) {      
        $n3=$n1 + $n2; //1
        echo " ", $n3;
        $n1=$n2;
        $n2=$n3;
    }
}
fibonacciSeries(10); // 0 1 1 2 3 5 8 13 21

function findDuplicates($dArr) {
    $elementCount=[];
    $duplicate=[];

    foreach ($dArr as $key => $value) {
        if (isset($elementCount[$value])) {
           $elementCount[$value]++;
        } else {
            $elementCount[$value]=1;
        }      
    }
    foreach ($elementCount as $k => $val) {
        if ($val > 1) {
            $duplicate[]=$k;
        }
    }

    return $duplicate;
}

$dArr= array(1,3,2,4,3,2,3,3);
print_r(findDuplicates($dArr));




