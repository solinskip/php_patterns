<?php

namespace creational\factoryMethod\examples\conceptual;

class ConcreteProduct2 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
