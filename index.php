<?php
require_once ("head.html");
if($_POST["x"]!=null and $_POST["y"]!=null and $_POST["operation"]!=null) {

    switch ($_POST["operation"]){
        case '+':
            $result=$_POST["x"]+$_POST["y"];
            break;
        case '-':
            $result=$_POST["x"]-$_POST["y"];
            break;
        case '*':
            $result=$_POST["x"]*$_POST["y"];
            break;
        case '/':
            $result=$_POST["x"]/$_POST["y"];
            break;

    }
    echo $result;
} else{
    echo"Incorrect input.";
}
?>
