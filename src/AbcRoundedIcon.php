<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'character', 'font', 'letter', 'symbol', 'text', 'type'],
)]
final class AbcRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M7.25,15c-0.41,0-0.75-0.34-0.75-0.75V13.5h-2v0.75C4.5,14.66,4.16,15,3.75,15S3,14.66,3,14.25V10c0-0.55,0.45-1,1-1h3 c0.55,0,1,0.45,1,1v4.25C8,14.66,7.66,15,7.25,15z M6.5,10.5h-2V12h2V10.5z M13.5,12c0.55,0,1,0.45,1,1v1c0,0.55-0.45,1-1,1h-3 c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v1C14.5,11.55,14.05,12,13.5,12z M11,10.5v0.75h2V10.5H11z M13,12.75 h-2v0.75h2V12.75z M21,10.25c0,0.41-0.34,0.75-0.75,0.75c-0.33,0-0.6-0.21-0.71-0.5l-2.04,0v3l2.04,0c0.1-0.29,0.38-0.5,0.71-0.5 c0.41,0,0.75,0.34,0.75,0.75V14c0,0.55-0.45,1-1,1h-3c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V10.25z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
