<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
<form method="get">

<input type="text" placeholder="Input Number 1" name="num1">
    <input type="text" placeholder="Input Number 2" name="num2">
    <select name="operator" id="">
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
    </select>
    <br>

    <button type="submit" name="submit">Calculate</button>
    <br>
    <p>The Answer is :</p>

</form>

<?php

    if(isset($_GET['submit'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch($operator){
            case "Add": 
                echo $num1+$num2;
                break;
            case "Subtract":
                echo $num1-$num2;
                break;
            case "Multiply":
                echo $num1*$num2;
                break;
            case "Divide":
                echo $num1/$num2;
                break;
            default:
                echo "no operator";
            }
    }

?>
</body>
</html>