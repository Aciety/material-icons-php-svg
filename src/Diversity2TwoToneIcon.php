<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['committee', 'diverse', 'diversity', 'family', 'friends', 'group', 'groups', 'heart', 'humans', 'network', 'people', 'persons', 'social', 'team'],
)]
final class Diversity2TwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M2.5,17.97c-0.48,0.28-0.64,0.89-0.37,1.37s0.89,0.64,1.37,0.37c0.48-0.28,0.64-0.89,0.37-1.37 S2.98,17.69,2.5,17.97z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21.5,17.97c-0.48-0.28-1.09-0.11-1.37,0.37s-0.11,1.09,0.37,1.37c0.48,0.28,1.09,0.11,1.37-0.37 S21.98,18.24,21.5,17.97z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '4', r: '1');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M10.1,15.9l1.42-1.42C8.79,12.05,7,10.41,7,8.85C7,7.8,7.8,7,8.85,7c1.11,0,1.54,0.65,2.68,2h0.93 c1.12-1.31,1.53-2,2.68-2c0.87,0,1.55,0.54,1.77,1.32c0.35-0.04,0.68-0.06,1-0.06c0.36,0,0.7,0.03,1.03,0.08 C18.7,6.43,17.13,5,15.15,5c-0.12,0-0.23,0.03-0.35,0.04C14.92,4.71,15,4.37,15,4c0-1.66-1.34-3-3-3S9,2.34,9,4 c0,0.37,0.08,0.71,0.2,1.04C9.08,5.03,8.97,5,8.85,5C6.69,5,5,6.69,5,8.85C5,11.27,7.04,13.16,10.1,15.9z M12,3c0.55,0,1,0.45,1,1 s-0.45,1-1,1s-1-0.45-1-1S11.45,3,12,3z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M22.5,16.24c-0.32-0.18-0.66-0.29-1-0.35c0.07-0.1,0.15-0.18,0.21-0.28c1.08-1.87,0.46-4.18-1.41-5.26 c-2.09-1.21-4.76-0.39-8.65,0.9l0.52,1.94c3.47-1.14,5.79-1.88,7.14-1.1c0.91,0.53,1.2,1.61,0.68,2.53 c-0.56,0.96-1.33,1-3.07,1.32l-0.47,0.81c0.58,1.62,0.97,2.33,0.39,3.32c-0.53,0.91-1.61,1.2-2.53,0.68 c-0.06-0.03-0.11-0.09-0.17-0.13c-0.3,0.67-0.64,1.24-1.03,1.73c0.07,0.04,0.13,0.09,0.2,0.14c1.87,1.08,4.18,0.46,5.26-1.41 c0.06-0.1,0.09-0.21,0.14-0.32c0.22,0.27,0.48,0.51,0.8,0.69c1.43,0.83,3.27,0.34,4.1-1.1S23.93,17.06,22.5,16.24z M21.87,19.33 c-0.28,0.48-0.89,0.64-1.37,0.37c-0.48-0.28-0.64-0.89-0.37-1.37s0.89-0.64,1.37-0.37C21.98,18.24,22.14,18.86,21.87,19.33z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M12.32,14.01c-0.74,3.58-1.27,5.95-2.62,6.73c-0.91,0.53-2,0.24-2.53-0.68c-0.56-0.96-0.2-1.66,0.39-3.32L7.1,15.93 c-1.7-0.31-2.5-0.33-3.07-1.32c-0.53-0.91-0.24-2,0.68-2.53c0.09-0.05,0.19-0.08,0.29-0.11c-0.35-0.56-0.64-1.17-0.82-1.85 c-0.16,0.07-0.32,0.14-0.48,0.23c-1.87,1.08-2.49,3.39-1.41,5.26c0.06,0.1,0.14,0.18,0.21,0.28c-0.34,0.06-0.68,0.17-1,0.35 c-1.43,0.83-1.93,2.66-1.1,4.1s2.66,1.93,4.1,1.1c0.32-0.18,0.58-0.42,0.8-0.69c0.05,0.11,0.08,0.22,0.14,0.32 c1.08,1.87,3.39,2.49,5.26,1.41c2.09-1.21,2.71-3.93,3.55-7.94L12.32,14.01z M3.5,19.7c-0.48,0.28-1.09,0.11-1.37-0.37 s-0.11-1.09,0.37-1.37c0.48-0.28,1.09-0.11,1.37,0.37S3.98,19.42,3.5,19.7z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
