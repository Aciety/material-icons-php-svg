<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'arrows', 'data', 'direction', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'left', 'move', 'rtl', 'sheet', 'side', 'slide', 'storage'],
)]
final class DriveFileMoveRtlTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.17,8l-2-2H4v12h16V8H11.17z M16,14h-4v3l-4-4l4-4v3h4V14z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M20,6h-8l-2-2H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8C22,6.9,21.1,6,20,6z M20,18H4V6h5.17l2,2H20V18z M12,17l-4-4l4-4v3h4v2h-4V17z');
        $doc->addChild($l0I2);
    }
}
