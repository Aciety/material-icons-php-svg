<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['image'],
    tags: ['album', 'archive', 'bookmark', 'image', 'label', 'library', 'mountain', 'mountains', 'photo', 'photography', 'picture', 'ribbon', 'save', 'tag'],
)]
final class PhotoAlbumSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,2H4v20h16V2z M11,4h5v7l-2.5-1.5L11,11V4z M7,18l2.38-3.17L11,17l2.62-3.5L17,18H7z');
        $doc->addChild($l0I1);
    }
}
