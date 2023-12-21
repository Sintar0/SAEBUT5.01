<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../scripts/get_request.php'; // Chemin vers le fichier contenant la fonction

final class GetRequestTest extends TestCase
{
    public function testHostOnly(): void
    {
        $expected = 'ping -c 3 example.com';
        $result = get_request('example.com', 0, false, false);
        $this->assertEquals($expected, $result);
    }

    public function testDFlagOnly(): void
    {
        $expected = 'ping -c 3 example.com -D';
        $result = get_request('example.com', 0, false, true);
        $this->assertEquals($expected, $result);
    }

    public function testQFlagOnly(): void
    {
        $expected = 'ping -c 3 example.com -q';
        $result = get_request('example.com', 0, true, false);
        $this->assertEquals($expected, $result);
    }
}