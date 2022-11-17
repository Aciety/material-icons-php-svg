<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['branding', 'components', 'copyright', 'design', 'emblem', 'format', 'identity', 'interface', 'layout', 'logo', 'screen', 'site', 'stamp', 'ui', 'ux', 'watermark', 'web', 'website', 'window'],
)]
final class BrandingWatermarkSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v18h22V3zm-2 16h-9v-6h9v6z');
        $doc->addChild($l0I1);
    }
}
