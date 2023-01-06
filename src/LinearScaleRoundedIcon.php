<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['app', 'application', 'components', 'design', 'interface', 'layout', 'linear', 'measure', 'menu', 'scale', 'screen', 'site', 'slider', 'ui', 'ux', 'web', 'website', 'window'],
)]
final class LinearScaleRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17,7c-2.41,0-4.43,1.72-4.9,4H6.79C6.4,10.12,5.52,9.5,4.5,9.5C3.12,9.5,2,10.62,2,12s1.12,2.5,2.5,2.5 c1.02,0,1.9-0.62,2.29-1.5h5.31c0.46,2.28,2.48,4,4.9,4c2.76,0,5-2.24,5-5S19.76,7,17,7z M17,15c-1.65,0-3-1.35-3-3s1.35-3,3-3 s3,1.35,3,3S18.65,15,17,15z');
        $doc->addChild($l0I1);
    }
}
