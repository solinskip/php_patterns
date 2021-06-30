<?php

namespace cretionalPatterns\factoryMethod\conceptExample;

class ConcreteCreator2 extends AbstractCreator
{
    /**
     * Note that the signature of the method still uses the abstract product
     * type, even though the concrete product is actually returned from the
     * method. This way the Creator can stay independent of concrete product
     * classes.
     *
     * @return ProductInterface
     */
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}
