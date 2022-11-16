<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class HotTubRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '7', cy: '6', r: '2');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21 12h-9.85c-.31-.22-.59-.46-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5-.29-.14-.62-.23-.96-.23h-.03C6.01 9 5 10.01 5 11.25V12H3c-.55 0-1 .45-1 1v7c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-7c0-.55-.45-1-1-1zM7 19c0 .55-.45 1-1 1s-1-.45-1-1v-4c0-.55.45-1 1-1s1 .45 1 1v4zm4 0c0 .55-.45 1-1 1s-1-.45-1-1v-4c0-.55.45-1 1-1s1 .45 1 1v4zm4 0c0 .55-.45 1-1 1s-1-.45-1-1v-4c0-.55.45-1 1-1s1 .45 1 1v4zm4 0c0 .55-.45 1-1 1s-1-.45-1-1v-4c0-.55.45-1 1-1s1 .45 1 1v4zm-3.94-9c.5 0 .93-.39.94-.89.04-1.4-.58-2.48-1.35-3.25-.65-.72-.8-1.27-.77-1.91.02-.52-.41-.95-.94-.95-.5 0-.93.4-.94.9-.03 1.29.5 2.43 1.35 3.25.61.59.78 1.27.78 1.89-.01.52.4.96.93.96zm4 0c.5 0 .93-.39.94-.89.04-1.4-.58-2.48-1.35-3.25-.65-.72-.8-1.27-.77-1.91.02-.52-.41-.95-.94-.95-.5 0-.93.4-.94.9-.03 1.29.5 2.43 1.35 3.25.61.59.78 1.27.78 1.89-.01.52.4.96.93.96z');
        $doc->addChild($l0I2);
    }
}
