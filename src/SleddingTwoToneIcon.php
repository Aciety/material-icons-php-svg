<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class SleddingTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14,4.5c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S14,3.4,14,4.5z M22.8,20.24c-0.68,2.1-2.94,3.25-5.04,2.57h0L1,17.36 l0.46-1.43l3.93,1.28l0.46-1.43L1.93,14.5l0.46-1.43L4,13.6V9.5l5.47-2.35c0.39-0.17,0.84-0.21,1.28-0.07 c0.95,0.31,1.46,1.32,1.16,2.27l-1.05,3.24L13,12.25c0.89-0.15,1.76,0.32,2.14,1.14l2.08,4.51l1.93,0.63l-0.46,1.43l-3.32-1.08 L14.9,20.3l3.32,1.08l0,0c1.31,0.43,2.72-0.29,3.15-1.61c0.43-1.31-0.29-2.72-1.61-3.15l0.46-1.43 C22.33,15.88,23.49,18.14,22.8,20.24z M6,14.25l1.01,0.33c-0.22-0.42-0.28-0.92-0.12-1.4L7.92,10L6,10.82V14.25z M13.94,18.41 l-6.66-2.16l-0.46,1.43l6.66,2.16L13.94,18.41z M14.63,17.05l-1.18-2.56l-3.97,0.89L14.63,17.05z');
        $doc->addChild($l0I1);
    }
}
