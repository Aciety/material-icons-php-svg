<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'membership', 'miles', 'money', 'online', 'pay', 'payment', 'travel', 'trip'],
)]
final class CardTravelSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 6h-5V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H2v15h20V6zM9 4h6v2H9V4zm11 15H4v-2h16v2zm0-5H4V8h3v2h2V8h6v2h2V8h3v6z');
        $doc->addChild($l0I1);
    }
}
