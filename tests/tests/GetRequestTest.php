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

    public function testCFlagOnly(): void
    {
        $expected = 'ping -c 3 example.com';
        $result = get_request('example.com', 3, false, false);
        $this->assertEquals($expected, $result);
    }

    public function testQAndDFlags(): void
    {
        $expected = 'ping -c 3 example.com -q -D';
        $result = get_request('example.com', 0, true, true);
        $this->assertEquals($expected, $result);
    }

    public function testDAndCFlags(): void
    {
        $expected = 'ping -c 5 example.com -D';
        $result = get_request('example.com', 5, false, true);
        $this->assertEquals($expected, $result);
    }

    public function testQAndCFlags(): void
    {
        $expected = 'ping -c 5 example.com -q';
        $result = get_request('example.com', 5, true, false);
        $this->assertEquals($expected, $result);
    }

    public function testAllFlags(): void
    {
        $expected = 'ping -c 5 example.com';
        $result = get_request('example.com', 5, true, true);
        $this->assertEquals($expected, $result);
    }

    public function testDFlagAndEmptyHostThrowsException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('HOST vide');
        get_request('', 0, false, true);
    }

    public function testCFlagAndEmptyHostThrowsException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('HOST vide');
        get_request('', 5, false, false);
    }

    public function testNoArgumentsThrowsException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('HOST vide');
        get_request('', 0, false, false);
    }
}