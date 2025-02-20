<?php
namespace App\Services;
use App\Traits\PrimeTrait;
final class PrimeNumber
{
    use PrimeTrait;
    protected $start;
    protected $end;
    protected $numbers;
    public function __construct($start = 1, $end = 100)
    {
        $this->start = $start;
        $this->end = $end;
        $this->numbers = [];
        $this->numbersArr();
    }
    public function numbersArr(): void
    {
        for ($i = $this->start; $i <= $this->end; $i++) {
            $vals = $this->getValues($i);
            $this->numbers[$i] = $vals;
        }
    }
    public function getValues($n): array
    {
        $vals = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $vals[] = $i;
            }
        }
        if ($this->isPrime($n)) {
            $vals[] = 'PRIME';
        }
        return $vals;
    }
    public function getNumbers(): array
    {
        return $this->numbers;
    }
}