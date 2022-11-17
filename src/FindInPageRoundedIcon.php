<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['data', 'doc', 'document', 'drive', 'file', 'find', 'folder', 'folders', 'glass', 'in', 'look', 'magnify', 'magnifying', 'page', 'paper', 'search', 'see', 'sheet', 'slide', 'writing'],
)]
final class FindInPageRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 19.59V8.83c0-.53-.21-1.04-.59-1.41l-4.83-4.83c-.37-.38-.88-.59-1.41-.59H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c.45 0 .85-.15 1.19-.4l-4.43-4.43c-.86.56-1.89.88-3 .82-2.37-.11-4.4-1.96-4.72-4.31-.44-3.35 2.45-6.18 5.83-5.61 1.95.33 3.57 1.85 4 3.78.33 1.46.01 2.82-.7 3.9L20 19.59zM9 13c0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3-3 1.34-3 3z');
        $doc->addChild($l0I1);
    }
}
