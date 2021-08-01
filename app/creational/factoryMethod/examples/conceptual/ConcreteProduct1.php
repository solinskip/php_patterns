<?php

namespace creational\factoryMethod\examples\conceptual;

class ConcreteProduct1 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
