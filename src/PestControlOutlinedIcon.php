<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['bug', 'control', 'exterminator', 'insects', 'pest'],
)]
final class PestControlOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,15v-2h-3.07c-0.05-0.39-0.12-0.77-0.22-1.14l2.58-1.49l-1-1.73L16.92,10c-0.28-0.48-0.62-0.91-0.99-1.29 c0.1-0.56,0.2-1.69-0.58-2.89L17,4.17l-1.41-1.41l-1.72,1.72c-1.68-0.89-3.1-0.33-3.73,0L8.41,2.76L7,4.17l1.65,1.65 c-0.78,1.2-0.68,2.34-0.58,2.89C7.7,9.1,7.36,9.53,7.08,10L4.71,8.63l-1,1.73l2.58,1.49c-0.1,0.37-0.17,0.75-0.22,1.14H3v2h3.07 c0.05,0.39,0.12,0.77,0.22,1.14l-2.58,1.49l1,1.73L7.08,18c1.08,1.81,2.88,3,4.92,3s3.84-1.19,4.92-3l2.37,1.37l1-1.73l-2.58-1.49 c0.1-0.37,0.17-0.75,0.22-1.14H21z M12,6c0.88,0,1.62,0.57,1.88,1.36C13.29,7.13,12.66,7,12,7s-1.29,0.13-1.88,0.36 C10.38,6.57,11.12,6,12,6z M12,19c-2.21,0-4-2.24-4-5s1.79-5,4-5s4,2.24,4,5S14.21,19,12,19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11', y: '11', width: '2', height: '6');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
