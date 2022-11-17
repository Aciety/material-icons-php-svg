<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'chevron', 'components', 'end', 'forward', 'interface', 'last', 'page', 'right', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class LastPageRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('opacity', '.87');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6.29 8.11L10.18 12l-3.89 3.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41L7.7 6.7c-.39-.39-1.02-.39-1.41 0-.38.39-.38 1.03 0 1.41zM17 6c.55 0 1 .45 1 1v10c0 .55-.45 1-1 1s-1-.45-1-1V7c0-.55.45-1 1-1z');
        $doc->addChild($l0I1);
    }
}
