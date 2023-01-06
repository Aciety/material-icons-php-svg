<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['airline', 'body', 'extra', 'feet', 'human', 'leg', 'legroom', 'normal', 'people', 'person', 'recline', 'seat', 'sitting', 'space', 'travel'],
)]
final class AirlineSeatReclineNormalRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7.59 5.41c-.78-.78-.78-2.05 0-2.83s2.05-.78 2.83 0 .78 2.05 0 2.83c-.79.79-2.05.79-2.83 0zM6 16V8c0-.55-.45-1-1-1s-1 .45-1 1v8c0 2.76 2.24 5 5 5h5c.55 0 1-.45 1-1s-.45-1-1-1H9c-1.66 0-3-1.34-3-3zm13.28 3.35l-3.77-3.77c-.37-.37-.88-.58-1.41-.58h-2.6v-3.68c1.09.89 2.66 1.7 4.2 2.02.67.14 1.3-.36 1.3-1.04 0-.53-.39-.96-.92-1.05-1.42-.24-2.88-1.01-3.75-1.97l-1.4-1.55c-.19-.21-.43-.38-.69-.5-.29-.14-.62-.23-.96-.23h-.03C8.01 7 7 8.01 7 9.25V15c0 1.66 1.34 3 3 3h5.07l2.78 2.78c.39.39 1.04.39 1.43 0 .4-.39.4-1.03 0-1.43z');
        $doc->addChild($l0I1);
    }
}
