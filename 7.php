<?php
$age = '5';
if($age <= 59 and $age >= 18){
    echo "Вам еще работать и работать.";
}
elseif ($age >59) {
    echo "Вам пора на пенсию.";
}
elseif ($age <=17 and $age >= 0){
    echo "Вам ещё рано работать.";
}