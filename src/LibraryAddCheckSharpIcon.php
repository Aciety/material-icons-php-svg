<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['add', 'approve', 'check', 'collection', 'complete', 'done', 'layers', 'library', 'mark', 'multiple', 'music', 'ok', 'select', 'stacked', 'tick', 'validate', 'verified', 'video', 'yes'],
)]
final class LibraryAddCheckSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,2H6v16h16V2z M12.47,14L9,10.5l1.4-1.41l2.07,2.08L17.6,6L19,7.41L12.47,14z M4,6H2v16h16v-2H4V6z');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
