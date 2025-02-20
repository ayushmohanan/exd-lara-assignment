<?php
namespace App\Traits;
trait PrimeTrait
{
    public function isPrime(int $n): bool
    {
        if ($n < 2) {
            return false;
        }
        if ($n === 2 || $n === 3) {
            return true;
        }
        if ($n % 2 === 0 || $n % 3 === 0) {
            return false;
        }
        for ($i = 5; $i * $i <= $n; $i += 6) {
            if ($n % $i === 0 || $n % ($i + 2) === 0) {
                return false;
            }
        }
        return true;
    }
}
