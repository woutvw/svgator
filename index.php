<?php

require_once 'vendor/autoload.php';

use WoutVW\SVGator\SVG;
use WoutVW\SVGator\Shapes\Circle;
use WoutVW\SVGator\Shapes\Ellipse;
use WoutVW\SVGator\Shapes\Line;
use WoutVW\SVGator\Shapes\Path;
use WoutVW\SVGator\Shapes\Polygon;
use WoutVW\SVGator\Shapes\Polyline;
use WoutVW\SVGator\Shapes\Rectangle;
use WoutVW\SVGator\Supplementary\Text;

$svg=new SVG(320, 320);
// $circle=new Circle(40, 40, 30);
// $circle->fill('red')->stroke('black')->strokeWidth(2);
// $svg->addChild($circle);
// $rect=new Ellipse(100, 40, 30, 40);
// $rect->fill('green')->stroke('black')->radiusX(10)->radiusY(30);
// $svg->addChild($rect);
// $line=new Line(10, 10, 200, 50);
// $line->stroke('blue');
// $svg->addChild($line);
// $polyLine = new Polygon();
// $polyLine->stroke('green')->addPoint(10, 10)->addPoint(50, 10)->addPoint(100, 50)->setAttribute('fill','none');
// $svg->addChild($polyLine);

$curve=new Path();
// $path->moveTo(150, 5)
//     ->lineTo(75, 200)
//     ->lineTo(225, 200)
//     ->closePath();
$curve->moveTo(10, 315)
    ->lineTo(110, 215)
    ->arc(30, 50, 0, 0, 1, 162.55, 162.45)
    ->lineTo(172.55, 152.45)
    ->arc(30, 50, -45, 0, 1, 215.1, 109.9)
    ->lineTo(315, 10)

    // ->curve(40, 10, 65, 10, 95, 80)
    // ->smoothCurve(150, 150, 180, 80)

    // ->quadraticBezierCurve(52.5, 10, 95, 80)
    // ->smoothQuadraticBezierCurve(180, 80)
    ->setAttribute('fill', 'none')
    ->setAttribute('stroke', 'black')
    ->setAttribute('stroke-width', 2);
$svg->addChild($curve);

$text = (new Text(10, 50, 0, 0, 0, 0, 0))->text('I love SVG!');
$svg->addChild($text);
    // $path=(new Path())->moveTo(95, 10)->lineTo(180, 80)->setAttribute('stroke','red');
    // $svg->addChild($path);

echo $svg->render();