<?php

namespace structural\composite\examples\population;

use SplObjectStorage;

abstract class Earth extends PopulationComposite
{
    /**
     * @var SplObjectStorage
     */
    protected $children;
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->children = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * @param PopulationComposite $component
     */
    public function add(PopulationComposite $component): void
    {
        $this->children->attach($component);
        $component->setPopulation($this);
    }

    /**
     * @param PopulationComposite $component
     */
    public function remove(PopulationComposite $component): void
    {
        $this->children->detach($component);
        $component->setPopulation(null);
    }

    public function count(): int
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->count();
        }

        return array_sum($results);
    }

    public function structure(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->structure();
        }

        return $this->name . '(' . implode(", ", $results) . ')';
    }
}
