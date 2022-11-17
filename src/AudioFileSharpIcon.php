<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['audio', 'doc', 'document', 'key', 'music', 'note', 'sound', 'track'],
)]
final class AudioFileSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M14,2H4v20h16V8L14,2z M16,13h-3v3.75c0,1.24-1.01,2.25-2.25,2.25S8.5,17.99,8.5,16.75c0-1.24,1.01-2.25,2.25-2.25 c0.46,0,0.89,0.14,1.25,0.38V11h4V13z M13,9V3.5L18.5,9H13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
