<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class NotListedLocationSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.01 16a.99.99 0 001-1 .99.99 0 00-1-1c-.28 0-.51.1-.71.29-.2.19-.3.43-.3.7s.1.51.29.71c.2.2.44.3.72.3zm-.88-3.66V13h1.85v-.42c0-.33.06-.6.18-.81.12-.21.33-.47.65-.77.4-.38.68-.75.89-1.09.19-.35.3-.76.3-1.25s-.13-.94-.39-1.35a2.57 2.57 0 00-1.05-.96C13.11 6.12 12.58 6 12 6c-.78 0-1.51.32-2.03.79C9.46 7.27 9 7.99 9 9h1.68c0-.52.19-.77.4-.98.21-.2.58-.3.96-.3.35 0 .64.1.85.3.21.2.32.45.32.74 0 .24-.06.46-.19.64-.13.19-.33.41-.61.66-.48.42-.81.79-1 1.12-.19.33-.28.71-.28 1.16zM12 2c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z');
        $doc->addChild($l0I1);
    }
}
