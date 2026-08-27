<?php

namespace Tests;

use App\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testGreetingMessage(): void
    {
        $application = new Application();

        $this->assertSame('Hello from ${{ values.name }}', $application->greeting());
    }
}
