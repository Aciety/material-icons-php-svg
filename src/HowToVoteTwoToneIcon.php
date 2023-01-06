<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['ballot', 'election', 'how', 'poll', 'to', 'vote'],
)]
final class HowToVoteTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 19h14v1H5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M18 13h-.68l-2 2h1.91L19 17H5l1.78-2h2.05l-2-2H6l-3 3v4c0 1.1.89 2 1.99 2H19c1.1 0 2-.89 2-2v-4l-3-3zm1 7H5v-1h14v1z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M12.048 12.905L8.505 9.362l4.95-4.95 3.543 3.543z');
        $l0I3->setStyle('opacity', '.3');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M19.11 7.25L14.16 2.3c-.38-.4-1.01-.4-1.4-.01L6.39 8.66c-.39.39-.39 1.02 0 1.41l4.95 4.95c.39.39 1.02.39 1.41 0l6.36-6.36c.39-.39.39-1.02 0-1.41zm-7.06 5.65L8.51 9.36l4.95-4.95L17 7.95l-4.95 4.95z');
        $doc->addChild($l0I4);
    }
}
