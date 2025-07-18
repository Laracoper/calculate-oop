<?

namespace App;

use Core\Func;


class Calc
{
    public $result;

    public function plus(int $a, int $b)
    {
        $this->result = $a + $b;
        return $this->result;
    }

      public function minus(int $a, int $b)
    {
        $this->result = $a - $b;
        return $this->result;
    }

      public function divide(int $a, int $b)
    {
        $this->result = $a / $b;
        return $this->result;
    }

     public function multiply(int $a, int $b)
    {
        $this->result = $a * $b;
        return $this->result;
    }
}
