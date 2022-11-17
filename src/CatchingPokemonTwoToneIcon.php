<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['catching', 'go', 'pokemon', 'pokestop', 'travel'],
)]
final class CatchingPokemonTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,4c4.08,0,7.45,3.05,7.94,7h-4.06C15.43,9.27,13.86,8,12,8s-3.43,1.27-3.87,3H4.06C4.55,7.05,7.92,4,12,4z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M12,4c4.08,0,7.45,3.05,7.94,7h-4.06 C15.43,9.27,13.86,8,12,8s-3.43,1.27-3.87,3H4.06C4.55,7.05,7.92,4,12,4z M14,12c0,1.1-0.9,2-2,2s-2-0.9-2-2c0-1.1,0.9-2,2-2 S14,10.9,14,12z M12,20c-4.08,0-7.45-3.05-7.94-7h4.06c0.44,1.73,2.01,3,3.87,3s3.43-1.27,3.87-3h4.06C19.45,16.95,16.08,20,12,20z');
        $doc->addChild($l0I2);
    }
}
