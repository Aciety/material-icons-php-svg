<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['app', 'application desktop', 'approve', 'check', 'complete', 'design', 'domain', 'done', 'interface', 'internet', 'layout', 'mark', 'ok', 'screen', 'select', 'site', 'tick', 'ui', 'ux', 'validate', 'verification', 'verified', 'web', 'website', 'window', 'www', 'yes'],
)]
final class DomainVerificationOutlinedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[16.6, 10.88], [15.18, 9.460000000000001], [10.94, 13.71], [8.82, 11.58], [7.4, 13], [10.94, 16.54]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
