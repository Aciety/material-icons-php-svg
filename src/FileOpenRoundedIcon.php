<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'doc', 'document', 'drive', 'file', 'left', 'open', 'page', 'paper'],
)]
final class FileOpenRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13.17,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h9v-6c0-1.1,0.9-2,2-2h3V8.83c0-0.53-0.21-1.04-0.59-1.41l-4.83-4.83 C14.21,2.21,13.7,2,13.17,2z M13,8V3.5L18.5,9H14C13.45,9,13,8.55,13,8z M22.66,17c0,0.55-0.45,1-1,1h-1.24l2.24,2.24 c0.39,0.39,0.39,1.02,0,1.41l0,0c-0.39,0.39-1.02,0.39-1.41,0L19,19.41l0,1.24c0,0.55-0.45,1-1,1c-0.55,0-1-0.45-1-1V17 c0-0.55,0.45-1,1-1h3.66C22.21,16,22.66,16.45,22.66,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
