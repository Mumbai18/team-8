<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Signer\Ecdsa;

use Mdanter\Ecc\Crypto\Key\PrivateKeyInterface;
use Mdanter\Ecc\Crypto\Key\PublicKeyInterface;
use Mdanter\Ecc\Math\MathAdapterInterface;
use Mdanter\Ecc\Serializer\PrivateKey\PrivateKeySerializerInterface;
use Mdanter\Ecc\Serializer\PublicKey\PublicKeySerializerInterface;
use Lcobucci\JWT\Signer\Key;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 3.0.4
 */
class KeyParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MathAdapterInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $adapter;

    /**
     * @var PrivateKeySerializerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $privateKeySerializer;

    /**
     * @var PublicKeySerializerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $publicKeySerializer;

    /**
     * @before
     */
    public function createDependencies()
    {
        $this->adapter = $this->getMock(MathAdapterInterface::class);
        $this->privateKeySerializer = $this->getMock(PrivateKeySerializerInterface::class);
        $this->publicKeySerializer = $this->getMock(PublicKeySerializerInterface::class);
    }

    /**
     * @test
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::__construct
     */
    public function constructShouldConfigureDependencies()
    {
        $parser = new KeyParser($this->adapter, $this->privateKeySerializer, $this->publicKeySerializer);

        $this->assertAttributeSame($this->privateKeySerializer, 'privateKeySerializer', $parser);
        $this->assertAttributeSame($this->publicKeySerializer, 'publicKeySerializer', $parser);
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa\KeyParser::__construct
     * @uses Lcobucci\JWT\Signer\Key
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getPrivateKey
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getKeyContent
     */
    public function getPrivateKeyShouldAskSerializerToParseTheKey()
    {
        $privateKey = $this->getMock(PrivateKeyInterface::class);

        $keyContent = ''
                      . ''
                      . 'ruiI2tsEdGFTLTsy***REMOVED***';

        $this->privateKeySerializer->expects($this->once())
                                   ->method('parse')
                                   ->with($keyContent)
                                   ->willReturn($privateKey);

        $parser = new KeyParser($this->adapter, $this->privateKeySerializer, $this->publicKeySerializer);
        $this->assertSame($privateKey, $parser->getPrivateKey($this->getPrivateKey()));
    }

    /**
     * @test
     *
     * @expectedException \InvalidArgumentException
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa\KeyParser::__construct
     * @uses Lcobucci\JWT\Signer\Key
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getPrivateKey
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getKeyContent
     */
    public function getPrivateKeyShouldRaiseExceptionWhenAWrongKeyWasGiven()
    {
        $this->privateKeySerializer->expects($this->never())
                                   ->method('parse');

        $parser = new KeyParser($this->adapter, $this->privateKeySerializer, $this->publicKeySerializer);
        $parser->getPrivateKey($this->getPublicKey());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa\KeyParser::__construct
     * @uses Lcobucci\JWT\Signer\Key
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getPublicKey
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getKeyContent
     */
    public function getPublicKeyShouldAskSerializerToParseTheKey()
    {
        $publicKey = $this->getMock(PublicKeyInterface::class);

        $keyContent = '***REMOVED***'
                      . 'd0wxa2iFruiI2tsEdGFTLTsy***REMOVED***';

        $this->publicKeySerializer->expects($this->once())
                                  ->method('parse')
                                  ->with($keyContent)
                                  ->willReturn($publicKey);

        $parser = new KeyParser($this->adapter, $this->privateKeySerializer, $this->publicKeySerializer);
        $this->assertSame($publicKey, $parser->getPublicKey($this->getPublicKey()));
    }

    /**
     * @test
     *
     * @expectedException \InvalidArgumentException
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa\KeyParser::__construct
     * @uses Lcobucci\JWT\Signer\Key
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getPublicKey
     * @covers Lcobucci\JWT\Signer\Ecdsa\KeyParser::getKeyContent
     */
    public function getPublicKeyShouldRaiseExceptionWhenAWrongKeyWasGiven()
    {
        $this->publicKeySerializer->expects($this->never())
                                  ->method('parse');

        $parser = new KeyParser($this->adapter, $this->privateKeySerializer, $this->publicKeySerializer);
        $parser->getPublicKey($this->getPrivateKey());
    }

    /**
     * @return Key
     */
    private function getPrivateKey()
    {
        return new Key(
            "***REMOVED***\n"
            . "***REMOVED***\n"
            . "***REMOVED***\n"
            . "***REMOVED***\n"
            . ""
        );
    }

    /**
     * @return Key
     */
    private function getPublicKey()
    {
        return new Key(
            "***REMOVED***\n"
            . "***REMOVED***\n"
            . "d0wxa2iFruiI2tsEdGFTLTsy***REMOVED***\n"
            . ""
        );
    }
}
