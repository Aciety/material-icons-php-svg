<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['call', 'cell', 'contact', 'device', 'hardware', 'mobile', 'phone', 'telephone'],
)]
final class PhoneTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z');
        $doc->addChild($l0I2);
    }
}
