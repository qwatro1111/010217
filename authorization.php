<?php
$arr_user = array(
	'name'=>'admin',
	'password'=>'admin',
);
$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');
if($name==$arr_user["name"] && $password==$arr_user["password"]){
    echo "Вы авторизированы";
}else{
    echo "Введенные данные не верны!";
}
