<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['content'],
    tags: ['all', 'content', 'copy', 'cut', 'doc', 'document', 'file', 'multiple', 'page', 'paper', 'past'],
)]
final class CopyAllSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,2H7v16h13V2z M18,16H9V4h9V16z M3,15v-2h2v2H3z M3,9.5h2v2H3V9.5z M10,20h2v2h-2V20z M3,18.5v-2h2v2H3z M5,22H3v-2h2V22 z M8.5,22h-2v-2h2V22z M15.5,22h-2v-2h2V22z M3,6h2v2H3V6z');
        $doc->addChild($l0I1);
    }
}
