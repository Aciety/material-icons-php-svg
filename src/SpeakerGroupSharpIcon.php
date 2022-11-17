<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['box', 'electronic', 'group', 'loud', 'multiple', 'music', 'sound', 'speaker', 'stereo', 'system', 'video'],
)]
final class SpeakerGroupSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 1H8v17.99h12V1zm-6 2c1.1 0 2 .89 2 2s-.9 2-2 2-2-.89-2-2 .9-2 2-2zm0 13.5c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '14', cy: '12.5', r: '2.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M6 5H4v18h12v-2H6z');
        $doc->addChild($l0I3);
    }
}
