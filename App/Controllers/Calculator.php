<?php
//initial when user click submit
if (isset($_POST["submit"])) {
    try {

        //when there is enough inputs from user
        if (is_numeric($_POST["first"]) && is_numeric($_POST["second"])) {
            //when user choose the correct operator
            if (!empty($_POST["operand"])) {
                //calculate the result
                $a = $_POST["first"];
                $b = $_POST["second"];
                $operand = $_POST["operand"];
                $calculator = new Calculator($a, $b, $operand);
                $calculator->Calc();
            }
            //when user forgot to choose an operand
            else {
                throw new Exception("Rồi không có dấu t tính cái gì, cái nết m à");
            }
        }
        //when user forgot to enter a number
        else {
            throw new Exception("Thiếu số tính củ cải gì má :)");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
