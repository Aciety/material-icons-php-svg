<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['backpacking', 'bag', 'climbing', 'duffle', 'hiking', 'mountain', 'social', 'sports', 'stick', 'trail', 'travel', 'walking'],
)]
final class HikingRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13.5,5.5c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S12.4,5.5,13.5,5.5z M18.25,9c-0.41,0-0.75,0.34-0.75,0.75l0,1.03 c-1.23-0.37-2.22-1.17-2.8-2.18l-1-1.6c-0.41-0.65-1.11-1-1.84-1c-0.78,0-1.59,0.5-1.78,1.44L7.25,21.76C7.12,22.4,7.61,23,8.27,23 c0.49,0,0.91-0.34,1.02-0.81L10.9,15l2.1,2v5c0,0.55,0.45,1,1,1s1-0.45,1-1v-5.64c0-0.55-0.22-1.07-0.62-1.45L12.9,13.5l0.6-3 c1,1.15,2.41,2.01,4,2.34v9.41c0,0.41,0.34,0.75,0.75,0.75S19,22.66,19,22.25V9.75C19,9.34,18.66,9,18.25,9z M7.43,13.13l-2.12-0.41 c-0.54-0.11-0.9-0.63-0.79-1.17l0.76-3.93c0.21-1.08,1.26-1.79,2.34-1.58l1.16,0.23L7.43,13.13z');
        $doc->addChild($l0I1);
    }
}
