<?php

namespace PenguinAstronaut\OtusTestPackage\Core;

class HelloWorld
{
    public static function hello(string $name = 'John Doe'): void
    {
        echo 'Hello ' . $name . PHP_EOL;
    }
}
