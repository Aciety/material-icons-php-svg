<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['compose', 'create', 'data', 'disk', 'document', 'draft', 'drive', 'edit', 'editing', 'file', 'floppy', 'input', 'multimedia', 'pen', 'pencil', 'save', 'storage', 'write', 'writing'],
)]
final class SaveAsSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,12.4V7l-4-4H3v18h9.4L21,12.4z M15,15c0,1.66-1.34,3-3,3s-3-1.34-3-3s1.34-3,3-3S15,13.34,15,15z M6,6h9v4H6V6z M19.99,16.25l1.77,1.77L16.77,23H15v-1.77L19.99,16.25z M23.61,16.16l-1.2,1.2l-1.77-1.77l1.2-1.2L23.61,16.16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
