<?php

namespace WoutVW\SVGator\Shapes;

use WoutVW\SVGator\SVGTag;

class Path extends SVGTag
{
    private $points=[];

    public function __construct()
    {
        parent::__construct('path');
    }

    public function addPoint($command)
    {
        $this->points[]=$command;

        return $this->setAttribute('d', implode(' ',$this->points));
    }

    public function moveTo($x, $y)
    {
        return $this->addPoint("M$x $y");
    }

    public function lineTo($x, $y)
    {
        return $this->addPoint("L$x $y");
    }

    public function horizontalLineTo($x, $y)
    {
        return $this->addPoint("H$x $y");
    }

    public function verticalLineTo($x, $y)
    {
        return $this->addPoint("V$x $y");
    }

    public function curve($dx1, $dy1, $dx2, $dy2, $x2, $y2)
    {
        return $this->addPoint("C $dx1 $dy1, $dx2 $dy2, $x2 $y2");
    }

    public function smoothCurve($dx, $dy, $x, $y)
    {
        return $this->addPoint("S $dx $dy, $x $y");
    }

    public function quadraticBezierCurve($dx, $dy, $x, $y)
    {
        return $this->addPoint("Q $dx $dy, $x $y");
    }

    public function smoothQuadraticBezierCurve($x, $y)
    {
        return $this->addPoint("T $x $y");
    }

    public function arc($radiusX, $radiusY, $xRotation, $largeArcFlag, $sweepFlag, $x, $y)
    {
        return $this->addPoint("A $radiusX $radiusY $xRotation $largeArcFlag $sweepFlag $x $y");
    }

    public function closePath()
    {
        return $this->addPoint('Z');
    }
}
