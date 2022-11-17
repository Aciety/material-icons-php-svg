<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['2', 'brightness', 'circle', 'control', 'crescent', 'level', 'moon', 'screen'],
)]
final class Brightness2RoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.43 2.3c-2.38-.59-4.68-.27-6.63.64-.35.16-.41.64-.1.86C8.3 5.6 10 8.6 10 12c0 3.4-1.7 6.4-4.3 8.2-.32.22-.26.7.09.86 1.28.6 2.71.94 4.21.94 6.05 0 10.85-5.38 9.87-11.6-.61-3.92-3.59-7.16-7.44-8.1z');
        $doc->addChild($l0I1);
    }
}
