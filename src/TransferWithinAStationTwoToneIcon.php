<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['a', 'arrow', 'arrows', 'body', 'direction', 'human', 'left', 'maps', 'people', 'person', 'public', 'right', 'route', 'station', 'stop', 'transfer', 'transportation', 'vehicle', 'walk', 'within'],
)]
final class TransferWithinAStationTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.49 13.75L14 16.25l2.49 2.5V17H22v-1.5h-5.51zm3.02 6H14v1.5h5.51V23L22 20.5 19.51 18zM7.5 3.5c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm2.05 6.9C10.85 12 12.8 13 15 13v-2c-1.85 0-3.45-1-4.35-2.45l-.95-1.6C9.35 6.35 8.7 6 8 6c-.25 0-.5.05-.75.15L2 8.3V13h2V9.65l1.75-.75L3 23h2.1l1.75-8L9 17v6h2v-7.55L8.95 13.4l.6-3z');
        $doc->addChild($l0I1);
    }
}
