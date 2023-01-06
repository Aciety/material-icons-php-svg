<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['approve', 'archive', 'beenhere', 'bookmark', 'check', 'complete', 'done', 'favorite', 'label', 'library', 'mark', 'ok', 'read', 'reading', 'remember', 'ribbon', 'save', 'select', 'tag', 'tick', 'validate', 'verified', 'yes'],
)]
final class BeenhereSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3.01 1L3 17l9 6 8.99-6L21 1H3.01zM10 16l-5-5 1.41-1.42L10 13.17l7.59-7.59L19 7l-9 9z');
        $doc->addChild($l0I1);
    }
}
