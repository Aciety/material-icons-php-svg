<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'arrow', 'box', 'click', 'cursor', 'draw', 'focus', 'highlight', 'pointer', 'select', 'selection', 'target'],
)]
final class HighlightAltSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M17,5h-2V3h2V5z M19,3v2h2V3H19z M19,9h2V7h-2V9z M19,13h2v-2h-2V13z M11,21h2v-2h-2V21z M7,5h2V3H7V5z M3,5h2V3H3V5z M3,17h2v-2H3V17z M3,21h2v-2H3V21z M11,5h2V3h-2V5z M3,9h2V7H3V9z M7,21h2v-2H7V21z M3,13h2v-2H3V13z M15,15v6l2.29-2.29L19.59,21 L21,19.59l-2.29-2.29L21,15H15z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
