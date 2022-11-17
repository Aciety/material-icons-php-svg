<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['+', 'add', 'archive', 'bookmark', 'favorite', 'label', 'library', 'new', 'plus', 'read', 'reading', 'remember', 'ribbon', 'save', 'symbol', 'tag'],
)]
final class NewLabelSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,12l-4.97,7H12l0-2l0-4H9v-3H3V5h13.03L21,12z M10,15H7v-3H5v3H2v2h3v3h2v-3h3V15z');
        $doc->addChild($l0I1);
    }
}
