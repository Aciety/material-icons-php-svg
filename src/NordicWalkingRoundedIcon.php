<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'body', 'entertainment', 'exercise', 'hiking', 'hobby', 'human', 'nordic', 'people', 'person', 'social', 'sports', 'travel', 'walker', 'walking'],
)]
final class NordicWalkingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.25,23c-0.41,0-0.75-0.34-0.75-0.75V14H19v8.25C19,22.66,18.66,23,18.25,23z M4.93,23c0.35,0,0.66-0.24,0.73-0.59 L7.53,14H6l-1.8,8.09C4.1,22.56,4.45,23,4.93,23z M13.5,5.5c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S12.4,5.5,13.5,5.5z M14,23 c0.55,0,1-0.45,1-1v-5.64c0-0.55-0.22-1.07-0.62-1.45L12.9,13.5l0.6-3c1.07,1.24,2.62,2.13,4.36,2.41c0.6,0.1,1.14-0.38,1.14-0.99 c0-0.49-0.35-0.91-0.83-0.98c-1.53-0.24-2.79-1.14-3.47-2.33l-1-1.6c-0.56-0.89-1.68-1.25-2.66-0.84L7.22,7.78 C6.48,8.1,6,8.82,6,9.62V12c0,0.55,0.45,1,1,1s1-0.45,1-1V9.6l1.8-0.7L7.25,21.76C7.12,22.4,7.61,23,8.27,23 c0.49,0,0.91-0.34,1.02-0.81L10.9,15l2.1,2v5C13,22.55,13.45,23,14,23z');
        $doc->addChild($l0I1);
    }
}
