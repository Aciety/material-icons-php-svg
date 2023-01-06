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
final class FileDownloadOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9,6.17V4c0-0.55,0.45-1,1-1h4c0.55,0,1,0.45,1,1v5h1.59c0.89,0,1.33,1.08,0.7,1.71l-1.88,1.88L9,6.17z M20.49,20.49 L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l4.5,4.5c-0.26,0.37-0.28,0.91,0.1,1.28l4.59,4.59 c0.35,0.35,0.88,0.37,1.27,0.09L15.17,18H6c-0.55,0-1,0.45-1,1s0.45,1,1,1h11.17l1.9,1.9c0.39,0.39,1.02,0.39,1.41,0 C20.88,21.51,20.88,20.88,20.49,20.49z');
        $doc->addChild($l0I1);
    }
}
