<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['architecture', 'attraction', 'building', 'estate', 'event', 'exhibition', 'explore', 'local', 'museum', 'places', 'real', 'see', 'shop', 'store', 'tour'],
)]
final class MuseumTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6,20h12V9H6V20z M8,11h2l2,3l2-3h2v7h-2v-4l-2,3l-2-3v4H8V11z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22,11V9L12,2L2,9v2h2v9H2v2h20v-2h-2v-9H22z M18,20H6V9h12V20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[10, 14], [12, 17], [14, 14], [14, 18], [16, 18], [16, 11], [14, 11], [12, 14], [10, 11], [8, 11], [8, 18], [10, 18]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
