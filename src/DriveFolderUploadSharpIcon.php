<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'data', 'doc', 'document', 'drive', 'file', 'folder', 'sheet', 'slide', 'storage', 'up', 'upload'],
)]
final class DriveFolderUploadSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,6H12l-2-2H2v16h20V6z M13,13v4h-2v-4H8l4.01-4L16,13H13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
