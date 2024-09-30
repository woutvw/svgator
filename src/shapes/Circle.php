<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Circle extends SVGTag
{
    public function __construct($centerX, $centerY, $radius)
    {
        parent::__construct('circle');

        $this->centerX($centerX);
        $this->centerY($centerY);
        $this->radius($radius);
    }

    public function centerX($centerX)
    {
        return $this->setAttribute('cx', $centerX);
    }

    public function centerY($centerY)
    {
        return $this->setAttribute('cy', $centerY);
    }

    public function radius($radius)
    {
        return $this->setAttribute('r', $radius);
    }

    public function fill($color)
    {
        return $this->setAttribute('fill', $color);
    }

    public function stroke($color)
    {
        return $this->setAttribute('stroke', $color);
    }

    public function strokeWidth($width)
    {
        return $this->setAttribute('stroke-width', $width);
    }
}
