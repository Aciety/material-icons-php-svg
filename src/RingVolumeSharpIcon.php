<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['call', 'calling', 'cell', 'contact', 'device', 'hardware', 'incoming', 'mobile', 'phone', 'ring', 'ringer', 'sound', 'telephone', 'volume'],
)]
final class RingVolumeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21.16 6.26l-1.41-1.41-3.56 3.55 1.41 1.41s3.45-3.52 3.56-3.55zM11 2h2v5h-2zM6.4 9.81L7.81 8.4 4.26 4.84 2.84 6.26c.11.03 3.56 3.55 3.56 3.55zM0 17.39l3.68 3.68 3.92-3.11v-3.37c2.85-.93 5.94-.93 8.8 0v3.38l3.91 3.1L24 17.39c-6.41-7.19-17.59-7.19-24 0z');
        $doc->addChild($l0I1);
    }
}
