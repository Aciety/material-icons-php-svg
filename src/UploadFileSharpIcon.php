<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'data', 'doc', 'document', 'download', 'drive', 'file', 'folder', 'folders', 'page', 'paper', 'sheet', 'slide', 'up', 'upload', 'writing'],
)]
final class UploadFileSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M14,2H4v20h16V8L14,2z M13,15v4h-2v-4H8l4.01-4L16,15H13z M13,9V3.5L18.5,9H13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
