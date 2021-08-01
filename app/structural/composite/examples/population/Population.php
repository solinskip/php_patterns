<?php

namespace structural\composite\examples\population;

class Population extends PopulationComposite
{
    /**
     * @var int
     */
    protected $number;

    /**
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function count(): int
    {
        return $this->number;
    }

    public function structure(): string
    {
       return $this->number;
    }
}
