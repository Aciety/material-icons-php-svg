<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['bubble', 'chat', 'comment', 'communicate', 'feedback', 'message', 'rate', 'rating', 'recommendation', 'reviews', 'speech'],
)]
final class ReviewsRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v15.59c0,0.89,1.08,1.34,1.71,0.71L6,18h14c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M13.57,11.57 l-1.12,2.44c-0.18,0.39-0.73,0.39-0.91,0l-1.12-2.44l-2.44-1.12c-0.39-0.18-0.39-0.73,0-0.91l2.44-1.12l1.12-2.44 c0.18-0.39,0.73-0.39,0.91,0l1.12,2.44l2.44,1.12c0.39,0.18,0.39,0.73,0,0.91L13.57,11.57z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
