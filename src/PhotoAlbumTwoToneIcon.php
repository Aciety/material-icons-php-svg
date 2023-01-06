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
final class PhotoAlbumTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16,4v7l-2.5-1.5L11,11V4H6v16h12V4H16z M7,18l2.38-3.17L11,17l2.62-3.5L17,18H7z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M18,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C20,2.9,19.1,2,18,2z M18,20H6V4h5v7l2.5-1.5L16,11V4h2V20 z M13.62,13.5L17,18H7l2.38-3.17L11,17L13.62,13.5z');
        $doc->addChild($l0I2);
    }
}
