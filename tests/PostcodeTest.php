<?php

/**
 * Testing for functions in postcode.inc
 */

class PostcodeTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test converting a postcode to a constituency
     */
	public function testPostcodeToConstituency()
    {
        $this->assertEquals(
            'Cities of London and Westminster',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency('SW1A 1AA')
        );
        $this->assertEquals(
            'Cities of London and Westminster',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency('SW1A1AA')
        );
        $this->assertEquals(
            'Cities of London and Westminster',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency('sw1a 1aa')
        );
        $this->assertEquals(
            'Cities of London and Westminster',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency(' SW1A 1AA ')
        );
        $this->assertEquals(
            'Cities of London and Westminster',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency('SW1 A1AA')
        );
    }

    /**
     * Test converting a broken postcode to a constituency, make sure we get an empty string
     */
    public function testBrokenPostcodeToConstituency()
    {
        $this->assertEquals(
            '',
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeToConstituency('ZZ00 ABC')
        );
    }

    /**
     * Test testing for Scottish postcode
     */
    public function testPostcodeIsScottish()
    {
        $this->assertEquals(
            true,
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeIsScottish('EH1 0AA')
        );
        $this->assertEquals(
            false,
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeIsScottish('SW1A 1AA')
        );
    }

    /**
     * Test testing for NI postcode
     */
    public function testPostcodeIsNi()
    {
        $this->assertEquals(
            true,
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeIsNI('BT1 0AA')
        );
        $this->assertEquals(
            false,
            \MySociety\TheyWorkForYou\Utility\Postcode::postcodeIsNI('SW1A 1AA')
        );
    }

}
