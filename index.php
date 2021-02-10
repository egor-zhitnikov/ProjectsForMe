
<?php
if(!empty($_POST["x"]) && !empty($_POST["y"])){

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
        default:
            echo"Incorrect input.";
            break;
    }
    echo $result;
} else{
    echo"Incorrect input.";
}
?>

