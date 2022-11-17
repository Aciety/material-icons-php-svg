<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['camera', 'card', 'digital', 'memory', 'photos', 'sd', 'secure', 'storage'],
)]
final class SdCardTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 8.83V20h12V4h-7.17L6 8.83zM15 7h2v4h-2V7zm-3 0h2v4h-2V7zm-1 4H9V7h2v4z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M18 2h-8L4 8v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H6V8.83L10.83 4H18v16zM9 7h2v4H9zm3 0h2v4h-2zm3 0h2v4h-2z');
        $doc->addChild($l0I2);
    }
}
