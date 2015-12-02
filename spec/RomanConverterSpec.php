<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanConverterSpec extends ObjectBehavior
{
	function it_converts_emty_string_to_0()
	{
    	$this->convert('')->shouldBe(0);
	}
	function it_converts_I_to_1()
    {
    	$this->convert('I')->shouldBe(1);
    } 
    function it_converts_II_to_2()
    {
    	$this->convert('II')->shouldBe(2);
    }
    function it_converts_III_to_3()
    {
    	$this->convert('II')->shouldBe(2);
    }
    function it_converts_IV_to_4()
    {
    	$this->convert('IV')->shouldBe(4);
    }
    function it_converts_V_to_5()
    {
    	$this->convert('V')->shouldBe(5);
    }
    function it_converts_VI_to_6()
    {
    	$this->convert('VI')->shouldBe(6);
    }
    function it_converts_VII_to_7()
    {
    	$this->convert('VII')->shouldBe(7);
    }
    function it_converts_VIII_to_8()
    {
    	$this->convert('VIII')->shouldBe(8);
    }
    function it_converts_IX_to_9()
    {
    	$this->convert('IX')->shouldBe(9);
    }
    function it_converts_X_to_10()
    {
    	$this->convert('X')->shouldBe(10);
    }
    function it_converts_XX_to_20()
    {
    	$this->convert('XX')->shouldBe(20);
    }
    function it_converts_MCMXCIX_to_1999()
    {
    	$this->convert('MCMXCIX')->shouldBe(1999);
    }
    function it_converts_MMMMCMXC_to_4990()
    {
    	$this->convert('MMMMCMXC')->shouldBe(4990);
    }
}
