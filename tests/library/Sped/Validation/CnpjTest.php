<?php

namespace Sped\Validation;

/**
 * Test class for Cnpj.
 * Generated by PHPUnit on 2012-07-27 at 09:06:09.
 */
class CnpjTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Cnpj
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Cnpj;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testValidate()
    {
        $this->assertTrue($this->object->validate('48464245000104'), 'O CNPJ não é válido');
    }

    public function testValidateFormatted()
    {
        $this->assertTrue($this->object->validate('48.464.245/0001-04'), 'O CNPJ não é válido');
    }

}

?>
