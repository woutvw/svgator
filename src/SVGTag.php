<?php

namespace WoutVW\SVGator;

class SVGTag
{
    private $tagName;
    private $children = [];
    private $attributes = [];

    public function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    public function addChild(SVGTag $child)
    {
        $this->children[] = $child;
    }

    public function setAttribute(string $attribute, $value)
    {
        $this->attributes[$attribute] = $value;

        return $this;
    }

    public function id(string $id)
    {
        return $this->setAttribute('id', $id);
    }

    public function style(string $style)
    {
        return $this->setAttribute('style', $style);
    }

    public function render(): string
    {
        $svg = $this->startTag();
        foreach ($this->children as $child) $svg .= $child->render();
        $svg .= $this->endTag();

        return $svg;
    }

    protected function startTag()
    {
        $attributeString = '';
        foreach ($this->attributes as $attribute => $value) {
            $attributeString .= ' ' . $attribute . '="' . $value . '"';
        }

        return '<' . $this->tagName . ' ' . $attributeString . ' >';
    }

    protected function endTag()
    {
        return '</' . $this->tagName . '>';
    }
}
