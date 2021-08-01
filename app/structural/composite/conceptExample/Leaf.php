<?php

namespace structural\composite\conceptExample;

class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}
