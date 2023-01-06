<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['content', 'copy', 'cut', 'data', 'doc', 'document', 'drive', 'duplicate', 'file', 'folder', 'folders', 'multiple', 'paste', 'sheet', 'slide', 'storage'],
)]
final class FolderCopyOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M3,19h17v2H3c-1.1,0-2-0.9-2-2V6h2V19z M23,6v9c0,1.1-0.9,2-2,2H7c-1.1,0-2-0.9-2-2L5.01,4C5.01,2.9,5.9,2,7,2h5l2,2h7 C22.1,4,23,4.9,23,6z M7,15h14V6h-7.83l-2-2H7V15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
