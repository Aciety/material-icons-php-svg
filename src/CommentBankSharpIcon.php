<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['archive', 'bank', 'bookmark', 'bubble', 'cchat', 'comment', 'communicate', 'favorite', 'label', 'library', 'message', 'remember', 'ribbon', 'save', 'speech', 'tag'],
)]
final class CommentBankSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M2,2v20l4-4h16V2H2z M19,13l-2.5-1.5L14,13V5h5V13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
