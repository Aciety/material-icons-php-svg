<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['cam', 'camera', 'conference', 'film', 'filming', 'hardware', 'image', 'motion', 'picture', 'video', 'videography'],
)]
final class VideocamSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 10.5V6H3v12h14v-4.5l4 4v-11l-4 4z');
        $doc->addChild($l0I1);
    }
}
