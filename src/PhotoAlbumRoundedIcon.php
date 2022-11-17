<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['album', 'archive', 'bookmark', 'image', 'label', 'library', 'mountain', 'mountains', 'photo', 'photography', 'picture', 'ribbon', 'save', 'tag'],
)]
final class PhotoAlbumRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C20,2.9,19.1,2,18,2z M15.24,10.55L13.5,9.5l-1.74,1.05 c-0.33,0.2-0.76-0.04-0.76-0.43V4h5v6.12C16,10.51,15.58,10.75,15.24,10.55z M7.6,17.2l1.38-1.83c0.2-0.27,0.6-0.27,0.8,0L11,17 l2.23-2.97c0.2-0.27,0.6-0.27,0.8,0l2.38,3.17c0.25,0.33,0.01,0.8-0.4,0.8H8C7.59,18,7.35,17.53,7.6,17.2z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
