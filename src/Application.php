<?php

namespace App;

class Application
{
    public function greeting(): string
    {
        return 'Hello from ${{ values.name }}';
    }
}
