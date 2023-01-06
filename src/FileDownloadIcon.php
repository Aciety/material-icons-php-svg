<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'arrows', 'down', 'download', 'downloads', 'drive', 'export', 'file', 'install', 'upload'],
)]
final class FileDownloadIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z');
        $doc->addChild($l0I1);
    }
}
