<?php

namespace tests;

use cls\types\DWord;
use cls\types\Int16;
use cls\types\Int32;
use cls\types\Int64;
use cls\types\Int8;
use cls\types\IntType;
use cls\types\LWord;
use cls\types\UByte;
use cls\types\UDWord;
use cls\types\UInt16;
use cls\types\UInt32;
use cls\types\UInt8;
use cls\types\UWord;
use PHPUnit\Framework\TestCase;
use Exception;

class IntegerTest extends TestCase
{

  public function test_int()
  {

    $inttype = new IntType();

    $this->assertEquals(0, $inttype());
    $this->assertEquals(0, (new IntType())());
    $this->assertEquals(123, $inttype->set(123)());
    $this->assertEquals(0, $inttype->reset()());
    $this->assertEquals(PHP_INT_MIN, $inttype->init_min()());
    $this->assertEquals(PHP_INT_MAX, $inttype->init_max()());
    $this->assertEquals(PHP_INT_SIZE, (new IntType())->get_byte_length());

  }

  public function test_uint8()
  {

    $uint8 = new UInt8();
    $this->assertEquals(0, $uint8());
    $this->assertEquals(0, (new UInt8())());
    $this->assertEquals(34, $uint8->set(34)());
    $this->assertEquals(0, $uint8->reset()());
    $this->assertEquals(0, $uint8->init_min()());
    $this->assertEquals(255, $uint8->init_max()());
    $this->assertEquals(1, (new UInt8())->get_byte_length());

    $this->expectException(Exception::class);
    new UInt8(256);


  }

  public function test_int8()
  {
    $int8 = new Int8();
    $this->assertEquals(0, $int8());
    $this->assertEquals(0, (new Int8())());
    $this->assertEquals(88, $int8->set(88)());
    $this->assertEquals(0, $int8->reset()());
    $this->assertEquals(-128, $int8->init_min()());
    $this->assertEquals(127, $int8->init_max()());
    $this->assertEquals(1, (new Int8())->get_byte_length());

    $this->expectException(Exception::class);
    new Int8(128);

  }

  public function test_uint16()
  {

    $uint16 = new UInt16();
    $this->assertEquals(0, $uint16());
    $this->assertEquals(0, (new UInt16())());
    $this->assertEquals(34, $uint16->set(34)());
    $this->assertEquals(0, $uint16->reset()());
    $this->assertEquals(0, $uint16->init_min()());
    $this->assertEquals(65535, $uint16->init_max()());
    $this->assertEquals(2, (new UInt16())->get_byte_length());

    $this->expectException(Exception::class);
    new UInt16(65536);


  }

  public function test_int16()
  {

    $int16 = new Int16();
    $this->assertEquals(0, $int16());
    $this->assertEquals(0, (new Int16())());
    $this->assertEquals(34, $int16->set(34)());
    $this->assertEquals(0, $int16->reset()());
    $this->assertEquals(-32768, $int16->init_min()());
    $this->assertEquals(32767, $int16->init_max()());
    $this->assertEquals(2, (new Int16())->get_byte_length());

    $this->expectException(Exception::class);
    new Int16(32768);


  }

  public function test_uint32()
  {

    $uint32 = new UInt32();
    $this->assertEquals(0, $uint32());
    $this->assertEquals(0, (new UInt32())());
    $this->assertEquals(872, $uint32->set(872)());
    $this->assertEquals(0, $uint32->reset()());
    $this->assertEquals(0, $uint32->init_min()());
    $this->assertEquals(4294967295, $uint32->init_max()());
    $this->assertEquals(4, (new UInt32())->get_byte_length());

    $this->expectException(Exception::class);
    new UInt32(4294967296);

  }

  public function test_int32()
  {

    $int32 = new Int32();
    $this->assertEquals(0, $int32());
    $this->assertEquals(0, (new Int32())());
    $this->assertEquals(872, $int32->set(872)());
    $this->assertEquals(0, $int32->reset()());
    $this->assertEquals(-2147483648, $int32->init_min()());
    $this->assertEquals(2147483647, $int32->init_max()());
    $this->assertEquals(4, (new Int32())->get_byte_length());

    $this->expectException(Exception::class);
    new Int32(2147483648);

  }

  public function test_int64()
  {

    $int64 = new Int64();
    $this->assertEquals(0, $int64());
    $this->assertEquals(0, (new Int64())());
    $this->assertEquals(872, $int64->set(872)());
    $this->assertEquals(0, $int64->reset()());
    $this->assertEquals(-9223372036854775808, $int64->init_min()());
    $this->assertEquals(9223372036854775807, $int64->init_max()());
    $this->assertEquals(8, (new Int64())->get_byte_length());

    $this->expectException(\TypeError::class);
    new Int64(9223372036854775808);

  }

  public function test_lword(){
    $lword = new LWord();
    $this->assertEquals(0, $lword());
    $this->assertEquals(0, (new LWord())());
    $this->assertEquals(54453453, $lword->set(54453453)());
    $this->assertEquals(0, $lword->reset()());
    $this->assertEquals(-9223372036854775808, $lword->init_min()());
    $this->assertEquals(9223372036854775807, $lword->init_max()());
    $this->assertEquals(8, (new LWord())->get_byte_length());

    $this->expectException(\TypeError::class);
    new LWord(9223372036854775808);
  }

  public function test_ubyte()
  {

    $ubyte = new UByte();
    $this->assertEquals(0, $ubyte());
    $this->assertEquals(0, (new UByte())());
    $this->assertEquals(55, $ubyte->set(55)());
    $this->assertEquals(0, $ubyte->reset()());
    $this->assertEquals(0, $ubyte->init_min()());
    $this->assertEquals(255, $ubyte->init_max()());
    $this->assertEquals(1, (new UByte())->get_byte_length());

    $this->expectException(Exception::class);
    new UByte(256);

  }

  public function test_udbyte()
  {

    $ubyte = new UWord();
    $this->assertEquals(0, $ubyte());
    $this->assertEquals(0, (new UWord())());
    $this->assertEquals(55, $ubyte->set(55)());
    $this->assertEquals(0, $ubyte->reset()());
    $this->assertEquals(0, $ubyte->init_min()());
    $this->assertEquals(65535, $ubyte->init_max()());
    $this->assertEquals(2, (new UWord())->get_byte_length());

    $this->expectException(Exception::class);
    new UWord(65536);

  }

  public function test_udword()
  {

    $udword = new UDWord();
    $this->assertEquals(0, $udword());
    $this->assertEquals(0, (new UDWord())());
    $this->assertEquals(99999, $udword->set(99999)());
    $this->assertEquals(0, $udword->reset()());
    $this->assertEquals(0, $udword->init_min()());
    $this->assertEquals(4294967295, $udword->init_max()());
    $this->assertEquals(4, (new UDWord())->get_byte_length());

    $this->expectException(Exception::class);
    new UDWord(4294967296);

  }

  public function test_dword()
  {

    $dword = new DWord();
    $this->assertEquals(0, $dword());
    $this->assertEquals(0, (new DWord())());
    $this->assertEquals(328497, $dword->set(328497)());
    $this->assertEquals(0, $dword->reset()());
    $this->assertEquals(-2147483648, $dword->init_min()());
    $this->assertEquals(2147483647, $dword->init_max()());
    $this->assertEquals(4, (new DWord())->get_byte_length());

    $this->expectException(Exception::class);
    new DWord(2147483648);

  }

}
