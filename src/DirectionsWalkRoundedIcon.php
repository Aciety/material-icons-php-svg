<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['body', 'direction', 'directions', 'human', 'jogging', 'maps', 'people', 'person', 'route', 'run', 'walk'],
)]
final class DirectionsWalkRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7.24 21.81c-.13.61.35 1.19.98 1.19h.08c.47 0 .87-.32.98-.78L10.9 15l2.1 2v5c0 .55.45 1 1 1s1-.45 1-1v-5.64c0-.55-.22-1.07-.62-1.45L12.9 13.5l.6-3c1.07 1.24 2.62 2.13 4.36 2.41.6.09 1.14-.39 1.14-1 0-.49-.36-.9-.85-.98-1.52-.25-2.78-1.15-3.45-2.33l-1-1.6c-.56-.89-1.68-1.25-2.65-.84L7.22 7.78C6.48 8.1 6 8.82 6 9.63V12c0 .55.45 1 1 1s1-.45 1-1V9.6l1.8-.7');
        $doc->addChild($l0I1);
    }
}
