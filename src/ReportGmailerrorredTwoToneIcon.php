<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'error', 'exclamation', 'gmail', 'gmailerrorred', 'important', 'mark', 'notification', 'octagon', 'report', 'symbol', 'warning'],
)]
final class ReportGmailerrorredTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '12', cy: '16', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M11 7h2v7h-2z');
        $doc->addChild($l0I3);
    }
}
