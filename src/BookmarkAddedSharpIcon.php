<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['added', 'approve', 'bookmark', 'check', 'complete', 'done', 'favorite', 'mark', 'ok', 'remember', 'save', 'select', 'tick', 'validate', 'verified', 'yes'],
)]
final class BookmarkAddedSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19,21l-7-3l-7,3V3h9c-0.63,0.84-1,1.87-1,3c0,2.76,2.24,5,5,5c0.34,0,0.68-0.03,1-0.1V21z M17.83,9L15,6.17l1.41-1.41 l1.41,1.41l3.54-3.54l1.41,1.41L17.83,9z');
        $doc->addChild($l0I1);
    }
}
