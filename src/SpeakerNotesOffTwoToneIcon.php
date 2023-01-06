<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bubble', 'chat', 'comment', 'communicate', 'disabled', 'enabled', 'format', 'list', 'message', 'notes', 'off', 'on', 'slash', 'speaker', 'speech', 'text'],
)]
final class SpeakerNotesOffTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 11V9L4 7v10.17L5.17 16H13l-5-5H6zm2 3H6v-2h2v2zM20 4H6.66L10 7.34V6h8v2h-7.34l1 1H18v2h-4.34l5 5H20z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M20 4v12h-1.34l1.91 1.91C21.39 17.66 22 16.9 22 16V4c0-1.1-.9-2-2-2H4.66l2 2H20zM6 12h2v2H6zm12-1V9h-6.34l2 2zm0-3V6h-8v1.34l.66.66zM1.41 1.59L0 3l2 2.01V22l4-4h9l5.73 5.73 1.41-1.41L1.41 1.59zM5.17 16L4 17.17V7l2 2v2h2l5 5H5.17z');
        $doc->addChild($l0I2);
    }
}
