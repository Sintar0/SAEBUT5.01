<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../scripts/simplify_ipv6.php';
require_once __DIR__ . '/../../scripts/get_type_ipv6.php';

final class IPV6Test extends TestCase
{
    public function testGlobalUnicast(): void
    {
        $expectedSimplification = '2001:db8::7334';
        $expectedType = 'Global Unicast';
        $resultSimplify = simplify_ipv6('2001:0db8:0000:0000:0000:0000:0000:7334');
        $resultType = get_type_ipv6('2001:0db8:0000:0000:0000:0000:0000:7334');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }

    public function testGlobalUnicast2(): void
    {
        $expectedSimplification = '2001:db8:ab00:cd00:ef00::12';
        $expectedType = 'Global Unicast';
        $resultSimplify = simplify_ipv6('2001:0DB8:AB00:CD00:EF00:0000:0000:0012');
        $resultType = get_type_ipv6('2001:0DB8:AB00:CD00:EF00:0000:0000:0012');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }

    public function testLinkLocal(): void
    {
        $expectedSimplification = 'fe80::204:61ff:fe9d:f156';
        $expectedType = 'Link-Local : Unicast';
        $resultSimplify = simplify_ipv6('fe80:0000:0000:0000:0204:61ff:fe9d:f156');
        $resultType = get_type_ipv6('fe80:0000:0000:0000:0204:61ff:fe9d:f156');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }

    public function testUnspecified(): void
    {
        $expectedSimplification = '::';
        $expectedType = 'Unspecified : Unicast';
        $resultSimplify = simplify_ipv6('0000:0000:0000:0000:0000:0000:0000:0000');
        $resultType = get_type_ipv6('0000:0000:0000:0000:0000:0000:0000:0000');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }

    public function testMulticast(): void
    {
        $expectedSimplification = 'ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff';
        $expectedType = 'Multicast';
        $resultSimplify = simplify_ipv6('ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff');
        $resultType = get_type_ipv6('ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }

    public function testAnycast(): void
    {
        $expectedSimplification = '1111:1111:1111:1111:1111:1111:1111:1111';
        $expectedType = 'Anycast';
        $resultSimplify = simplify_ipv6('1111:1111:1111:1111:1111:1111:1111:1111');
        $resultType = get_type_ipv6('1111:1111:1111:1111:1111:1111:1111:1111');
        $this->assertEquals($expectedType, $resultType);
        $this->assertEquals($expectedSimplification, $resultSimplify);
    }
}
