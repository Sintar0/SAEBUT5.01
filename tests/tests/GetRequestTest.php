<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ '/../../scripts/get_request.php'; // Chemin vers le fichier contenant la fonction

final class GetRequestTest extends TestCase
{
    public function testGetRequestWithValidArguments(): void
    {
        $expected = 'ping -c 5 example.com -q -D';
        $result = get_request('example.com', 5, true, true);
        $this->assertEquals($expected, $result);
    }
}

