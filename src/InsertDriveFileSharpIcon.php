<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['doc', 'drive', 'file', 'format', 'insert', 'sheet', 'slide'],
)]
final class InsertDriveFileSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M4.01 2L4 22h16V8l-6-6H4.01zM13 9V3.5L18.5 9H13z');
        $doc->addChild($l0I0);
    }
}
