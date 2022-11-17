<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['architecture', 'attraction', 'building', 'estate', 'event', 'exhibition', 'explore', 'local', 'museum', 'places', 'real', 'see', 'shop', 'store', 'tour'],
)]
final class MuseumSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M22,11V9L12,2L2,9v2h2v9H2v2h20v-2h-2v-9H22z M16,18h-2v-4l-2,3l-2-3v4H8v-7h2l2,3l2-3h2V18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
