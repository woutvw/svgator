<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Polygon extends SVGTag
{
    private $points = [];

    public function __construct()
    {
        parent::__construct('polygon');
    }

    public function addPoint($x, $y)
    {
        $this->points[]=[$x, $y];
        return $this->setAttribute('points', $this->pointsString());
    }

    private function pointsString(): string
    {
        $points = array_map(function($coord){ return $coord[0].','.$coord[1]; }, $this->points);

        return implode(' ', $points);
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
