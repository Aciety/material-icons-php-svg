<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alert', 'announcement', 'idea', 'info', 'information', 'light', 'lightbulb'],
)]
final class LightbulbCircleTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,4c-4.41,0-8,3.59-8,8s3.59,8,8,8s8-3.59,8-8S16.41,4,12,4z M12,19c-0.83,0-1.5-0.67-1.5-1.5h3 C13.5,18.33,12.83,19,12,19z M15,16.5H9V15h6V16.5z M14.97,14H9.03C7.8,13.09,7,11.64,7,10c0-2.76,2.24-5,5-5s5,2.24,5,5 C17,11.64,16.2,13.09,14.97,14z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,19c0.83,0,1.5-0.67,1.5-1.5h-3C10.5,18.33,11.17,19,12,19z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '9', y: '15', width: '6', height: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M12,5c-2.76,0-5,2.24-5,5c0,1.64,0.8,3.09,2.03,4h5.95C16.2,13.09,17,11.64,17,10C17,7.24,14.76,5,12,5z M14.43,12.5H9.57 C8.89,11.84,8.5,10.95,8.5,10c0-1.93,1.57-3.5,3.5-3.5s3.5,1.57,3.5,3.5C15.5,10.95,15.11,11.84,14.43,12.5z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
