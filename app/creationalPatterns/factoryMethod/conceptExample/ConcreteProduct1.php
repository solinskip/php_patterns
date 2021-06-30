<?php

namespace cretionalPatterns\factoryMethod\conceptExample;

class ConcreteProduct1 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
