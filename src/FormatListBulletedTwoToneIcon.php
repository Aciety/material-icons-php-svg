<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'bulleted', 'doc', 'edit', 'editing', 'editor', 'format', 'list', 'notes', 'sheet', 'spreadsheet', 'text', 'type', 'writing'],
)]
final class FormatListBulletedTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 5h14v2H7z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '4', cy: '6', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M7 11h14v2H7zm0 6h14v2H7zm-3 2.5c.82 0 1.5-.68 1.5-1.5s-.67-1.5-1.5-1.5-1.5.68-1.5 1.5.68 1.5 1.5 1.5z');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '4', cy: '12', r: '1.5');
        $doc->addChild($l0I4);
    }
}
