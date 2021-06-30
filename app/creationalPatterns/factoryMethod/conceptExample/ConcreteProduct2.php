<?php

namespace cretionalPatterns\factoryMethod\conceptExample;

class ConcreteProduct2 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
