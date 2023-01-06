<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['camera', 'enhance', 'important', 'lens', 'photo', 'photography', 'picture', 'quality', 'special', 'star'],
)]
final class CameraEnhanceSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.83 5L15 3H9L7.17 5H2v16h20V5h-5.17zM12 18c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-9l-1.25 2.75L8 13l2.75 1.25L12 17l1.25-2.75L16 13l-2.75-1.25z');
        $doc->addChild($l0I1);
    }
}
