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
}
