<?php

namespace WoutVW\SVGator;

class SVG extends SVGTag
{
    public function __construct($width, $height)
    {
        parent::__construct('svg');

        $this->width($width);
        $this->height($height);
        $this->setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        $this->setAttribute('viewBox', "0 0 $width $height");
    }

    public function width($width)
    {
        $this->setAttribute('width', $width);
    }

    public function height($width)
    {
        $this->setAttribute('height', $width);
    }
}
