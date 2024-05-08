<?php
class Calculator
{
    public function __construct(
        private int $num1 = 0,
        private int $num2 = 1,
        private string $operand

    ) {
    }
    public function Calc()
    {
        switch ($this->operand) {
            case "add":
                $this->Add($this->num1, $this->num2);
                break;
            case "subtract":
                $this->Minus($this->num1, $this->num2);
                break;
            case "times":
                $this->Mul($this->num1, $this->num2);
                break;
            case "divide":
                $this->Div($this->num1, $this->num2);
                break;
            default:
                throw new Exception("Rồi không có dấu t tính cái gì, cái nết m à");
        }
    }

    public function Add($num1, $num2)
    {
        echo $num1 + $num2;
    }
    public function Minus($num1, $num2)
    {
        echo $num1 - $num2;
    }
    public function Mul($num1, $num2)
    {
        echo $num1 * $num2;
    }
    public function Div($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception("ê ê sao chia cho 0 vậy má ?");
        }
        echo $num1 / $num2;
    }
}
