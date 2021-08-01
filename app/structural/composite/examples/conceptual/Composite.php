<?php

namespace structural\composite\examples\conceptual;

use SplObjectStorage;

class Composite extends Component
{
    /**
     * @var SplObjectStorage
     */
    protected $children;

    public function __construct()
    {
        $this->children = new SplObjectStorage();
    }

    /**
     * A composite object can add or remove other components (both simple or complex) to or from its child list
     *
     * @param Component $component
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * @param Component $component
     */
    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }

    /**
     * The Composite executes its primary logic in a particular way.
     * It traverses recursively through all its children, collecting and summing
     * their results. Since the composite's children pass these calls to their
     * children and so forth, the whole object tree is traversed as a result.
     *
     * @return string
     */
    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode("+", $results) . ")";
    }
}
