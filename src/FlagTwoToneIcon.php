<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['country', 'flag', 'goal', 'mark', 'nation', 'report', 'start'],
)]
final class FlagTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.36 6H7v6h7.24l.4 2H18V8h-5.24z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6zm3.6 8h-3.36l-.4-2H7V6h5.36l.4 2H18v6z');
        $doc->addChild($l0I2);
    }
}
