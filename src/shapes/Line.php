<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Line extends SVGTag
{
    public function __construct($x1, $y1, $x2, $y2)
    {
        parent::__construct('line');

        $this->x1($x1);
        $this->y1($y1);
        $this->x2($x2);
        $this->y2($y2);
    }

    public function x1($x)
    {
        return $this->setAttribute('x1', $x);
    }

    public function y1($y)
    {
        return $this->setAttribute('y1', $y);
    }

    public function x2($x)
    {
        return $this->setAttribute('x2', $x);
    }

    public function y2($y)
    {
        return $this->setAttribute('y2', $y);
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
