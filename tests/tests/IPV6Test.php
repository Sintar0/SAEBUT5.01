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

}
