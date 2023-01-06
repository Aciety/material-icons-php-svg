<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['agriculture', 'automobile', 'car', 'cars', 'cultivation', 'farm', 'harvest', 'maps', 'tractor', 'transport', 'travel', 'truck', 'vehicle'],
)]
final class AgricultureRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19.5,11.97c0.93,0,1.78,0.28,2.5,0.76V7.97c0-1.1-0.9-2-2-2h-6.29l-1.06-1.06l1.06-1.06c0.2-0.2,0.2-0.51,0-0.71 s-0.51-0.2-0.71,0l-2.83,2.83c-0.2,0.2-0.2,0.51,0,0.71l0,0c0.2,0.2,0.51,0.2,0.71,0l1.06-1.06L13,6.68v2.29c0,1.1-0.9,2-2,2 h-0.54c0.95,1.06,1.54,2.46,1.54,4c0,0.34-0.04,0.67-0.09,1h3.14C15.3,13.73,17.19,11.97,19.5,11.97z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19.5,12.97c-1.93,0-3.5,1.57-3.5,3.5s1.57,3.5,3.5,3.5s3.5-1.57,3.5-3.5S21.43,12.97,19.5,12.97z M19.5,17.97 c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5S20.33,17.97,19.5,17.97z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M4,8.97h5c0-1.1-0.9-2-2-2H4c-0.55,0-1,0.45-1,1C3,8.53,3.45,8.97,4,8.97z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M9.83,13.79l-0.18-0.47l0.93-0.35c-0.46-1.06-1.28-1.91-2.31-2.43l-0.4,0.89l-0.46-0.21l0.4-0.9 C7.26,10.11,6.64,9.97,6,9.97c-0.53,0-1.04,0.11-1.52,0.26l0.34,0.91l-0.47,0.18L4,10.4c-1.06,0.46-1.91,1.28-2.43,2.31l0.89,0.4 l-0.21,0.46l-0.9-0.4C1.13,13.72,1,14.33,1,14.97c0,0.53,0.11,1.04,0.26,1.52l0.91-0.34l0.18,0.47l-0.93,0.35 c0.46,1.06,1.28,1.91,2.31,2.43l0.4-0.89l0.46,0.21l-0.4,0.9c0.57,0.22,1.18,0.35,1.82,0.35c0.53,0,1.04-0.11,1.52-0.26L7.18,18.8 l0.47-0.18L8,19.55c1.06-0.46,1.91-1.28,2.43-2.31l-0.89-0.4l0.21-0.46l0.9,0.4c0.22-0.57,0.35-1.18,0.35-1.82 c0-0.53-0.11-1.04-0.26-1.52L9.83,13.79z M7.15,17.75c-1.53,0.63-3.29-0.09-3.92-1.62c-0.63-1.53,0.09-3.29,1.62-3.92 c1.53-0.63,3.29,0.09,3.92,1.62C9.41,15.36,8.68,17.11,7.15,17.75z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
