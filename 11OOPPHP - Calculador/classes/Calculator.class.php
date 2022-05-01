<?php
class Calculator
{
    public $oper;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, int $three)
    {
        $this->oper = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }
    public function calc()
    {
        switch ($this->oper) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Error! No has elegido nada ;)";
                break;
        }
    }
}