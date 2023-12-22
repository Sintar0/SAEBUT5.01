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
        $this->expectExceptionMessage("\$dec < 0");
        dec_to_bin_32_bit(-1);
    }

    public function testIpAdressBinToDec(): void
    {
        $expectedDec1 = '0.0.0.0';
        $expectedDec2 = '255.255.255.255';

        $resultDec1 = ip_adress_bin_to_dec('00000000000000000000000000000000');
        $resultDec2 = ip_adress_bin_to_dec('11111111111111111111111111111111');

        $this->assertEquals($expectedDec1, $resultDec1);
        $this->assertEquals($expectedDec2, $resultDec2);
    }
    
    public function testIpAdressBinToDecException(): void 
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Ip invalide");
        ip_adress_bin_to_dec("0000000000");
    }

    public function testIpAdressDecToBin(): void
    {
        $expectedBin1 = '00000000000000000000000000000000';
        $expectedBin2 = '11111111111111111111111111111111';
        
        $resultBin1 = dec_to_ip_adress_bin('0.0.0.0');
        $resultBin2 = dec_to_ip_adress_bin('255.255.255.255');

        $this->assertEquals($expectedBin1, $resultBin1);
        $this->assertEquals($expectedBin2, $resultBin2);
    }

    public function testIpNetworkFromIpMask(): void
    {
        $expectedMask1 = '1101';
        $expectedMask2 = '0000';
        
        $resultMask1 = get_ip_network_from_ip_mask('1101','1111');
        $resultMask2 = get_ip_network_from_ip_mask('1101', '0000');

        $this->assertEquals($expectedMask1, $resultMask1);
        $this->assertEquals($expectedMask2, $resultMask2);
    }

    public function testIpNetworkFromIpMaskException(): void 
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("IP ou Mask invalid");
        get_ip_network_from_ip_mask("0000000000","000");
    }
}
