<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class HowToRegRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 20l-.86-.86c-1.18-1.18-1.17-3.1.02-4.26l.84-.82c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9zm-1-8c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M16.18 19.78c-.39.39-1.03.39-1.42 0l-2.07-2.09c-.38-.39-.38-1.01 0-1.39l.01-.01c.39-.39 1.02-.39 1.4 0l1.37 1.37 4.43-4.46c.39-.39 1.02-.39 1.41 0l.01.01c.38.39.38 1.01 0 1.39l-5.14 5.18z');
        $doc->addChild($l0I2);
    }
}
