<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alphabet', 'as', 'character', 'document', 'file', 'font', 'image', 'letter', 'multiple', 'pdf', 'photo', 'photography', 'picture', 'symbol', 'text', 'type'],
)]
final class PictureAsPdfSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 2H6v16h16V2zm-10.5 9H9v2H7.5V7h4v4zm5 .5c0 .83-.67 1.5-1.5 1.5h-2.5V7H15c.83 0 1.5.67 1.5 1.5v3zm4-3H19v1h1.5V11H19v2h-1.5V7h3v1.5zM9 9.5h1v-1H9v1zM4 6H2v16h16v-2H4V6zm10 5.5h1v-3h-1v3z');
        $doc->addChild($l0I1);
    }
}
