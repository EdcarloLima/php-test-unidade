<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class VetorTest extends TestCase
{
    public function testAdicionarNoVetor()
    {
        $vetor = [];
        $this->assertSame(0,count($vetor));
        array_push($vetor, 'edcarlo');
        $this->assertSame('edcarlo', $vetor[count($vetor)-1]);
    }

    public function testRemoverDoVetor()
    {
        $vetor = ['lima'];
        $this->assertSame(1,count($vetor));
        $this->assertSame('lima', array_pop($vetor));
        $this->assertSame(0, count($vetor));
    }
}
