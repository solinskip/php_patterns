<?php

namespace structural\composite\examples\conceptual;

class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}
