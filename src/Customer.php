<?php

namespace kacankcorp\Customer;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name)
    {
        return "Hello {$name}, My name is {$this->name}";
    }
}