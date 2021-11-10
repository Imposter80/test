<?php


//  default values
$firstTask = [1, 3, 5, 4, 5, 7];

$secondTask = [[1, 2, 3, 2, 7, 3 ,8, -7], [4, 5, 6, 0, 1, 9, 2, 1 ], [7, 8, 9, 4, 5, 6, 4, 5]];

$thirdTask  = [ ["Hello", "world"], ["Brad", "came", "to", "dinner", "with", "us"], ["He", "loves", "tacos"] ];
$alignment = ["LEFT", "RIGHT", "LEFT"];



if (isset($_POST['check_task1'] ))
{
    if ($_POST['check_task1'] == 2){
        $firstTask = createArrey();
    }
}

if (isset($_POST['check_task2'] ))
{
    if ($_POST['check_task2'] == 2){
        $secondTask = null;
        $secondTask[] = createArrey();
        $secondTask[] = createArrey();
        $secondTask[] = createArrey();
    }
}


function createArrey(){
    $arr = [];
    for ($i = 0; $i <= 14; $i++) {
        $arr[$i] = rand(1, 9);
    }
    return $arr;
}

// TASK 1

function compareArrey($arr){
    $result = [];
    for ($i = 0; $i <= count($arr) -3; $i++) {
        if (($arr[$i] > $arr[$i+1] && $arr[$i+1] < $arr[$i+2]) || ($arr[$i] < $arr[$i+1] && $arr[$i+1] > $arr[$i+2]) ){
            $result[] = 1;
        }
        else{
            $result[] = 0;
        }
    }
    //$str = implode(",", $result);
    return $result;
}

// TASK 2

function checkMatrix($arr){
    $result = [];
    for ($i = 0; $i <= count($arr[0]) - 3; $i++) {
        //оба варианта рабочие
    //$ar =  array_intersect(array(1,2,3,4,5,6,7,8,9) , array_unique(array_merge((array_slice($arr[0], $i, 3)), (array_slice($arr[1], $i, 3)), (array_slice($arr[2], $i, 3)))));
      $ar = array_filter(array_unique(array_merge((array_slice($arr[0], $i, 3)), (array_slice($arr[1], $i, 3)), (array_slice($arr[2], $i, 3)))), function($v) {
          return ($v > 0 && $v < 10);
      });
        if (count($ar) == 9){
            $result[] = true;
        }else{
            $result[] = false;
        }
    }
    //$str = implode(",", $result);
    return $result;
}


// TASK 3



function formattingString($arr, $alignment){

    if (count($arr) != count($alignment)){
        return '<a style="color: red">Error in transmitted data!</a>';
    }

    $lineLimit = 16;
    $border = str_pad('', $lineLimit +2, '*');
    $result= $border;

    for ($i = 0; $i < count($arr); $i++){

        $str = implode(" ", $arr[$i]);

        if (strlen($str) <= $lineLimit){

            $result .= "<br/>" . alignString($str , $alignment[$i]);

        }else{
            $lines = explode("\n", wordwrap($str, 16, "\n"));

            foreach ($lines as $line){

                $result .= "<br/>" . alignString($line , $alignment[$i]);
            }
        }
    }
    $result .= "<br/>" . $border;
    return $result;
}

function alignString($str, $side){

    switch ($side) {
        case "LEFT":
            $result = '*'. str_pad($str, 16, ' ', STR_PAD_RIGHT) .'*';
            break;
        case "RIGHT":
            $result = '*'. str_pad($str, 16, ' ', STR_PAD_LEFT) .'*';
            break;
    }
    return $result;
}
