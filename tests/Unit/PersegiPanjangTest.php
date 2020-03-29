<?php
namespace adekabang\BangunRuang\Tests;
use adekabang\BangunRuang\Tests\TestCase;
use adekabang\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
    public function testHitungLuas()
    {
        $hasil = PersegiPanjang::hitungLuas(10,5);
        $this->assertEquals($hasil, 50);
    }

    public function testHitungKeliling()
    {
        $hasil = PersegiPanjang::HitungKeliling(3,2);
        $this->assertEquals($hasil, 10);
    }
}