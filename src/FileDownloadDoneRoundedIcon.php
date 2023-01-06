<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'arrows', 'check', 'done', 'down', 'download', 'downloads', 'drive', 'file', 'install', 'installed', 'tick', 'upload'],
)]
final class FileDownloadDoneRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19.42,4.71L19.42,4.71c-0.39-0.39-1.02-0.39-1.41,0l-8.48,8.49L5.99,9.66c-0.39-0.39-1.02-0.39-1.41,0l0,0 c-0.39,0.39-0.39,1.02,0,1.41l4.24,4.24c0.39,0.39,1.02,0.39,1.41,0l9.19-9.19C19.82,5.73,19.82,5.1,19.42,4.71z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,20h12c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6c-0.55,0-1,0.45-1,1v0C5,19.55,5.45,20,6,20z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
