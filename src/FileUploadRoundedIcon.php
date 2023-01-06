<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'arrows', 'download', 'drive', 'export', 'file', 'up', 'upload'],
)]
final class FileUploadRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M7.4,10h1.59v5c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-5h1.59c0.89,0,1.34-1.08,0.71-1.71L12.7,3.7 c-0.39-0.39-1.02-0.39-1.41,0L6.7,8.29C6.07,8.92,6.51,10,7.4,10z M5,19c0,0.55,0.45,1,1,1h12c0.55,0,1-0.45,1-1s-0.45-1-1-1H6 C5.45,18,5,18.45,5,19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
