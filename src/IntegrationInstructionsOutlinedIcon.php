<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['brackets', 'clipboard', 'code', 'css', 'develop', 'developer', 'doc', 'document', 'engineer', 'engineering clipboard', 'html', 'instructions', 'integration', 'platform'],
)]
final class IntegrationInstructionsOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGCircle(cx: '12', cy: '3.5', r: '.75');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGCircle(cx: '12', cy: '3.5', r: '.75');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $l1I3 = new SVGPolygon(points: [[5, 15], [5, 16], [5, 19], [19, 19], [19, 16], [19, 15], [19, 5], [5, 5]]);
        $l1I3->setStyle('fill', 'none');
        $l0I0->addChild($l1I3);
        $l1I4 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[11, 14.17], [8.83, 12], [11, 9.83], [9.59, 8.41], [6, 12], [9.59, 15.59]]);
        $l1I4->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14.41, 15.59], [18, 12], [14.41, 8.41], [13, 9.83], [15.17, 12], [13, 14.17]]);
        $l1I4->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19,3h-4.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H5C4.86,3,4.73,3.01,4.6,3.04C4.21,3.12,3.86,3.32,3.59,3.59 c-0.18,0.18-0.33,0.4-0.43,0.64C3.06,4.46,3,4.72,3,5v10v1v3c0,0.27,0.06,0.54,0.16,0.78c0.1,0.24,0.25,0.45,0.43,0.64 c0.27,0.27,0.62,0.47,1.01,0.55C4.73,20.99,4.86,21,5,21h14c1.1,0,2-0.9,2-2v-3v-1V5C21,3.9,20.1,3,19,3z M12,2.75 c0.41,0,0.75,0.34,0.75,0.75S12.41,4.25,12,4.25s-0.75-0.34-0.75-0.75S11.59,2.75,12,2.75z M19,15v1v3H5v-3v-1V5h14V15z');
        $l1I4->addChild($l2I2);
        $l0I0->addChild($l1I4);
        $doc->addChild($l0I0);
    }
}
