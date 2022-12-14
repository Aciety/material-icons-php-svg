<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['data', 'doc', 'document', 'drive', 'file', 'folder', 'sheet', 'slide', 'storage', 'topic'],
)]
final class TopicSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M12,6l-2-2H2v16h20V6H12z M14,16H6v-2h8V16z M18,12H6v-2h12V12z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
