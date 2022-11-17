<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['arrow', 'bag', 'baggage', 'briefcase', 'business', 'case', 'next', 'suitcase', 'week'],
)]
final class NextWeekRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 7h-4V5c0-.55-.22-1.05-.59-1.41C15.05 3.22 14.55 3 14 3h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm.5 13c-.28-.28-.28-.72 0-1l2.5-2.5-2.5-2.5c-.28-.28-.28-.72 0-1s.72-.28 1 0l3.15 3.15c.2.2.2.51 0 .71L11.5 18c-.28.28-.72.28-1 0z');
        $doc->addChild($l0I1);
    }
}
