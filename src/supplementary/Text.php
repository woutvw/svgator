<?php

namespace WoutVW\SVGator\Supplementary;

use WoutVW\SVGator\SVGTag;

class Text extends SVGTag
{
    private $text= '';

    public function __construct($x, $y, $dx, $dy, $rotate, $textLength, $lengthAdjust)
    {
        parent::__construct('text');

        $this->x($x);
        $this->y($y);

        $this->x2($dx);
        $this->y2($dy);
    }

    public function text($text)
    {
        $this->text = $text;

        return $this;
    }

    public function x($x)
    {
        return $this->setAttribute('x', $x);
    }

    public function y($y)
    {
        return $this->setAttribute('y', $y);
    }

    public function x2($x)
    {
        return $this->setAttribute('dx', $x);
    }

    public function y2($y)
    {
        return $this->setAttribute('dy', $y);
    }

    public function rotate($angle)
    {
        return $this->setAttribute('rotate', $angle);
    }

    public function render(): string
    {
        $svg=$this->startTag();
        $svg.=$this->text;
        $svg.=$this->endTag();

        return $svg;
    }
}