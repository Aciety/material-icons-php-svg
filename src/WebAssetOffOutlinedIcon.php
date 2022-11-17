<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['asset', 'browser', 'disabled', 'enabled', 'internet', 'off', 'on', 'page', 'screen', 'slash', 'web', 'webpage', 'website', 'windows', 'www'],
)]
final class WebAssetOffOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6.83,4H20c1.11,0,2,0.9,2,2v12c0,0.34-0.09,0.66-0.23,0.94L20,17.17V8h-9.17L6.83,4z M20.49,23.31L17.17,20H4 c-1.11,0-2-0.9-2-2V6c0-0.34,0.08-0.66,0.23-0.94L0.69,3.51L2.1,2.1l19.8,19.8L20.49,23.31z M15.17,18l-10-10H4v10H15.17z');
        $doc->addChild($l0I1);
    }
}
