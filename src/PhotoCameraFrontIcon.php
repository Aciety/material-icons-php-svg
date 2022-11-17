<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['account', 'camera', 'face', 'front', 'human', 'image', 'people', 'person', 'photo', 'photography', 'picture', 'portrait', 'profile', 'user'],
)]
final class PhotoCameraFrontIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 10.48l4-3.98v11l-4-3.98V18c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2v4.48zm-2-.79V6H4v12h12V9.69zM10 12c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm0 1c1.34 0 4 .67 4 2v1H6v-1c0-1.33 2.66-2 4-2z');
        $doc->addChild($l0I1);
    }
}
