<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['bad', 'cancel', 'certified', 'close', 'error', 'exit', 'gpp', 'no', 'privacy', 'private', 'protect', 'protection', 'remove', 'security', 'shield', 'sim', 'stop', 'verified', 'x'],
)]
final class GppBadRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18.7,4.51l-6-2.25c-0.45-0.17-0.95-0.17-1.4,0l-6,2.25C4.52,4.81,4,5.55,4,6.39v4.7c0,4.94,3.27,9.57,7.71,10.83 c0.19,0.05,0.39,0.05,0.57,0C16.73,20.66,20,16.03,20,11.09v-4.7C20,5.55,19.48,4.81,18.7,4.51z M14.8,14.79L14.8,14.79 c-0.39,0.39-1.02,0.39-1.41,0.01L12,13.42l-1.39,1.38c-0.39,0.39-1.02,0.39-1.41,0l0,0c-0.39-0.39-0.39-1.02,0-1.41L10.59,12 L9.2,10.61c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0L12,10.59l1.39-1.39c0.39-0.39,1.02-0.39,1.41,0l0,0 c0.39,0.39,0.39,1.02,0,1.41L13.42,12l1.38,1.38C15.19,13.77,15.19,14.4,14.8,14.79z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
