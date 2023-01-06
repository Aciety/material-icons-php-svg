<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'error', 'exclamation', 'gmail', 'gmailerrorred', 'important', 'mark', 'notification', 'octagon', 'report', 'symbol', 'warning'],
)]
final class ReportGmailerrorredIcon extends SvgIcon
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGRect(x: '11', y: '7', width: '2', height: '6');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGRect(x: '11', y: '15', width: '2', height: '2');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
