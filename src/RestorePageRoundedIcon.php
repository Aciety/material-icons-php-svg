<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'data', 'doc', 'file', 'page', 'paper', 'refresh', 'restore', 'rotate', 'sheet', 'storage'],
)]
final class RestorePageRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.41 7.41l-4.83-4.83c-.37-.37-.88-.58-1.41-.58H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8.83c0-.53-.21-1.04-.59-1.42zM12 18c-1.65 0-3.19-.81-4.12-2.17-.23-.34-.15-.81.19-1.04.34-.24.81-.15 1.04.19.65.95 1.73 1.52 2.88 1.52 1.93 0 3.5-1.57 3.5-3.5S13.93 9.5 12 9.5c-1.33 0-2.52.74-3.11 1.89L10.5 13H7c-.28 0-.5-.22-.5-.5V9l1.3 1.3C8.71 8.89 10.26 8 12 8c2.76 0 5 2.24 5 5s-2.24 5-5 5z');
        $doc->addChild($l0I1);
    }
}
