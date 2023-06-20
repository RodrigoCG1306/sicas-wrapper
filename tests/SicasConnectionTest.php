<?php

use PHPUnit\Framework\TestCase;
use Sicas\Sicas;

final class SicasConnectionTest extends TestCase
{
    const EMPTY = "";
    protected $sicas;

    public function testCanConnectToSicasWebService(): void
    {
        $this->sicas = new Sicas($_ENV['user'], $_ENV['password']);
        $sicasFunctions = $this->sicas->getFunctions();
        $this->assertNotEmpty($sicasFunctions);
    }
}