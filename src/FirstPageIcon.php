<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class FirstPageIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6zM6 6h2v12H6z');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M24 24H0V0h24v24z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
    }
}