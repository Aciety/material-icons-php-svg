<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'disabled', 'down', 'download', 'drive', 'enabled', 'export', 'file', 'install', 'off', 'on', 'save', 'slash', 'upload'],
)]
final class FileDownloadOffSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9,6.17V3h6v6h4l-3.59,3.59L9,6.17z M21.19,21.19L2.81,2.81L1.39,4.22L6.17,9H5l7,7l0.59-0.59L15.17,18H5v2h12.17l2.61,2.61 L21.19,21.19z');
        $doc->addChild($l0I1);
    }
}
