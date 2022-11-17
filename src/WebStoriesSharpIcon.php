<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['google', 'images', 'logo', 'stories', 'web'],
)]
final class WebStoriesSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M17,4c1.1,0,2,0,2,0v16c0,0-0.9,0-2,0V4z M2,2v20h13V2H2z M21,18c0.83,0,1.5,0,1.5,0V6c0,0-0.67,0-1.5,0V18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
