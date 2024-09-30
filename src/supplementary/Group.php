<?php

namespace WoutVW\SVGator\Supplementary;

use WoutVW\SVGator\SVGTag;

class Group extends SVGTag
{
    public function __construct()
    {
        parent::__construct('g');
    }
}