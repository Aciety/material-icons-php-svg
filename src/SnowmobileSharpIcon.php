<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'direction', 'skimobile', 'snow', 'snowmobile', 'social', 'sports', 'transportation', 'travel', 'vehicle', 'winter'],
)]
final class SnowmobileSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,17c0,0.55-0.45,1-1,1h-0.17l-2.2-2.2C21.6,15.18,23,13,23,13l-9-8h-3v2h2.25l1.45,1.3L11,11l-9.5-1L0,13l4.54,1.36 l-3.49,1.88C-0.77,17.22-0.07,20,2,20h6c2.21,0,4-1.79,4-4h4l2,2h-3v2h6c1.66,0,3-1.34,3-3H22z M8,18H2l5.25-2.83L10,16 C10,17.1,9.11,18,8,18z');
        $doc->addChild($l0I1);
    }
}
