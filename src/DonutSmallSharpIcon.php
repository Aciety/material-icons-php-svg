<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class DonutSmallSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13 9.18c.85.3 1.51.97 1.82 1.82h7.13c-.47-4.72-4.23-8.48-8.95-8.95v7.13zm-2 5.64C9.84 14.4 9 13.3 9 12c0-1.3.84-2.4 2-2.82V2.05c-5.05.5-9 4.76-9 9.95 0 5.19 3.95 9.45 9 9.95v-7.13zM14.82 13c-.3.85-.97 1.51-1.82 1.82v7.13c4.72-.47 8.48-4.23 8.95-8.95h-7.13z');
        $doc->addChild($l0I1);
    }
}
