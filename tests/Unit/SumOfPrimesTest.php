<?php

namespace Tests\Unit;

use Tests\TestCase;

class SumOfPrimesTest extends TestCase
{
    /**
     * @return void
     */
    public function testExample()
    {
        $this->assertEquals(2, $this->sumOfPrimes(1));
        $this->assertEquals(5, $this->sumOfPrimes(2));
        $this->assertEquals(28, $this->sumOfPrimes(5));
        $this->assertEquals(129, $this->sumOfPrimes(10));
        $this->assertEquals(3682913, $this->sumOfPrimes(1000));
        $this->assertEquals(16274627, $this->sumOfPrimes(2000));
    }

    /**
     * 指定された数の素数を合計して返す
     * 素数はかならず 2 から値の小さい順に加算する
     *
     * @param int $n
     * @return int
     */
    function sumOfPrimes(int $n): int
    {
        // ここに書く！

        $num = 2; // 最初の素数
        $primes = collect();

        while ($primes->count() < $n) {
            if ($this->primeJudge($num)) {
                $primes->push($num); // 素数ならコレクションに追加
            }
            $num++;
        }

        return $primes->sum(); // コレクション内の素数を合計して返す
    }
    function primeJudge(int $num): bool
    {
        if ($num <= 1) {
            return false;
        }

        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
}
