<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['bin', 'can', 'data', 'delete', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'garbage', 'remove', 'sheet', 'slide', 'storage', 'trash'],
)]
final class FolderDeleteIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M22,8v10c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2L2.01,6C2.01,4.9,2.9,4,4,4h6l2,2h8C21.1,6,22,6.9,22,8z M16.5,10V9h-2v1H12 v1.5h1v4c0,0.83,0.67,1.5,1.5,1.5h2c0.83,0,1.5-0.67,1.5-1.5v-4h1V10H16.5z M16.5,15.5h-2v-4h2V15.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
