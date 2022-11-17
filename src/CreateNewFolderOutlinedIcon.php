<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['+', 'add', 'create', 'data', 'doc', 'document', 'drive', 'file', 'folder', 'new', 'plus', 'sheet', 'slide', 'storage', 'symbol'],
)]
final class CreateNewFolderOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 6h-8l-2-2H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm0 12H4V6h5.17l2 2H20v10zm-8-4h2v2h2v-2h2v-2h-2v-2h-2v2h-2z');
        $doc->addChild($l0I1);
    }
}
