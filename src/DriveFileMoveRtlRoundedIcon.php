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
final class DriveFileMoveRtlRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,6h-8l-1.41-1.41C10.21,4.21,9.7,4,9.17,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M11.15,16.15l-2.79-2.79c-0.2-0.2-0.2-0.51,0-0.71l2.79-2.79C11.46,9.54,12,9.76,12,10.21V12h3 c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1h-3v1.79C12,16.24,11.46,16.46,11.15,16.15z');
        $doc->addChild($l0I1);
    }
}
