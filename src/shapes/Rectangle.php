<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Rectangle extends SVGTag
{
    public function __construct($x, $y, $width, $height)
    {
        parent::__construct('rect');

        $this->x($x);
        $this->y($y);
        $this->width($width);
        $this->height($height);
    }

    public function x($x)
    {
        return $this->setAttribute('x',$x);
    }

    public function y($y)
    {
        return $this->setAttribute('y',$y);
    }

    public function width($width)
    {
        return $this->setAttribute('width',$width);
    }

    public function height($height)
    {
        return $this->setAttribute('height',$height);
    }

    public function radiusX($radius)
    {
        return $this->setAttribute('rx',$radius);
    }

    public function radiusY($radius)
    {
        return $this->setAttribute('ry',$radius);
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
