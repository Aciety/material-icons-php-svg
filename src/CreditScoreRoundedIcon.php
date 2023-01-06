<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['approve', 'bill', 'card', 'cash', 'check', 'coin', 'commerce', 'complete', 'cost', 'credit', 'currency', 'dollars', 'done', 'finance', 'loan', 'mark', 'money', 'ok', 'online', 'pay', 'payment', 'score', 'select', 'symbol', 'tick', 'validate', 'verified', 'yes'],
)]
final class CreditScoreRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,4H4C2.89,4,2.01,4.89,2.01,6L2,18c0,1.11,0.89,2,2,2h4c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H4v-6h18V6 C22,4.9,21.1,4,20,4z M20,8H4V6h16V8z M14.93,19.17l-2.12-2.12c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41 l2.83,2.83c0.39,0.39,1.02,0.39,1.41,0l5.66-5.66c0.39-0.39,0.39-1.02,0-1.41v0c-0.39-0.39-1.02-0.39-1.41,0L14.93,19.17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
