<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Ellipse extends SVGTag
{
    public function __construct($centerX, $centerY, $radiusX, $radiusY)
    {
        parent::__construct('ellipse');

        $this->centerX($centerX);
        $this->centerY($centerY);
        $this->radiusX($radiusX);
        $this->radiusY($radiusY);
    }

    public function centerX($centerX)
    {
        return $this->setAttribute('cx', $centerX);
    }

    public function centerY($centerY)
    {
        return $this->setAttribute('cy', $centerY);
    }

    public function radiusX($radius)
    {
        return $this->setAttribute('rx', $radius);
    }

    public function radiusY($radius)
    {
        return $this->setAttribute('ry', $radius);
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
