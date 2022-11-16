<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class TextRotateVerticalRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15 5c-.46 0-.87.27-1.05.69l-3.88 8.97c-.27.63.2 1.34.89 1.34.39 0 .74-.24.89-.6l.66-1.6h5l.66 1.6c.15.36.5.6.89.6.69 0 1.15-.71.88-1.34l-3.88-8.97C15.87 5.27 15.46 5 15 5zm-1.87 7L15 6.98 16.87 12h-3.74zm-6.78 7.64l1.79-1.79c.32-.31.1-.85-.35-.85H7V5c0-.55-.45-1-1-1s-1 .44-1 1v12h-.79c-.45 0-.67.54-.35.85l1.79 1.79c.19.2.51.2.7 0z');
        $doc->addChild($l0I1);
    }
}
