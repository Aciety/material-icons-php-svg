<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['airline', 'angled', 'body', 'business', 'class', 'first', 'flat', 'human', 'people', 'person', 'rest', 'seat', 'sleep', 'travel'],
)]
final class AirlineSeatFlatAngledTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 16.64l-4-1.45V17h4zM6 8.5c.15 0 .3-.03.44-.1.49-.24.7-.84.46-1.34-.19-.41-.59-.56-.9-.56-.15 0-.3.03-.44.1-.32.16-.45.42-.5.56-.05.15-.12.44.04.77.2.42.59.57.9.57zm13.16 2.52l-6.69-2.41-.7 1.91 8.59 3.11.01-.02c.19-.51.17-1.05-.06-1.53-.23-.5-.63-.87-1.15-1.06z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M1.5 12.14L8 14.48V19h8v-1.63L20.52 19l.69-1.89-19.02-6.86-.69 1.89zm8.5 3.05l4 1.44V17h-4v-1.81zm9.84-6.05l-8.56-3.09-2.08 5.66 12.36 4.47.69-1.89c.77-2.09-.31-4.39-2.41-5.15zm.53 4.46l-.01.02-8.59-3.11.7-1.91 6.69 2.41c.52.19.93.56 1.15 1.05.23.49.25 1.04.06 1.54zM6 10.5c.44 0 .88-.1 1.3-.3 1.49-.72 2.12-2.51 1.41-4C8.19 5.13 7.12 4.5 6 4.5c-.44 0-.88.1-1.3.3-1.49.71-2.12 2.5-1.4 4 .51 1.07 1.58 1.7 2.7 1.7zm-.94-3.34c.05-.14.18-.4.51-.56.14-.06.28-.1.43-.1.31 0 .7.15.9.56.24.5.02 1.1-.47 1.34-.14.06-.28.1-.43.1-.3 0-.7-.15-.89-.56-.17-.34-.1-.63-.05-.78z');
        $doc->addChild($l0I2);
    }
}
