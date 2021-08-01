<?php

namespace structural\composite\examples\population;

abstract class PopulationComposite
{
    /**
     * @var PopulationComposite
     */
    protected $population;

    public function setPopulation(PopulationComposite $population)
    {
        $this->population = $population;
    }

    public function getPopulation(): PopulationComposite
    {
        return $this->population;
    }

    public function add(PopulationComposite $component): void { }

    public function remove(PopulationComposite $component): void { }

    abstract public function count(): int;
    abstract public function structure(): string;
}
