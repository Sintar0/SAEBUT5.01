<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../scripts/fonctions_Ipv4.php';

final class IPV4Test extends TestCase
{
    public function testCidrToIp(): void
    {
        $expectedIp1 = '00000000000000000000000000000000';
        $expectedIp2 = '11111111111111111111111100000000';
        $expectedIp3 = '11111111111111111111111111111111';

        $resultIp1 = cidr_to_ip(0);
        $resultIp2 = cidr_to_ip(24);
        $resultIp3 = cidr_to_ip(32);

        $this->assertEquals($expectedIp1, $resultIp1);
        $this->assertEquals($expectedIp2, $resultIp2);
        $this->assertEquals($expectedIp3, $resultIp3);
    }

    public function testCidrToIpException(): void 
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("CIDR < 0");
        cidr_to_ip(-1);
    }

    public function testDecToBin32Bit(): void
    {
        $expectedBin1 = '00000000000000000000000000000000';
        $expectedBin2 = '00000000000000000000000000001010';

        $resultBin1 = dec_to_bin_32_bit(0);
        $resultBin2 = dec_to_bin_32_bit(10);

        $this->assertEquals($expectedBin1, $resultBin1);
        $this->assertEquals($expectedBin2, $resultBin2);
    }

    public function testDecToBin32BitException(): void 
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("$dec < 0");
        dec_to_bin_32_bit(-1);
    }
}
