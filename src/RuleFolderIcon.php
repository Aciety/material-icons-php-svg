<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['approve', 'cancel', 'check', 'close', 'complete', 'data', 'doc', 'document', 'done', 'drive', 'exit', 'file', 'folder', 'mark', 'no', 'ok', 'remove', 'rule', 'select', 'sheet', 'slide', 'storage', 'tick', 'validate', 'verified', 'x', 'yes'],
)]
final class RuleFolderIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,6h-8l-2-2H4C2.9,4,2.01,4.9,2.01,6L2,18c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8C22,6.9,21.1,6,20,6z M7.83,16L5,13.17 l1.41-1.41l1.41,1.41l3.54-3.54l1.41,1.41L7.83,16z M17.41,13L19,14.59L17.59,16L16,14.41L14.41,16L13,14.59L14.59,13L13,11.41 L14.41,10L16,11.59L17.59,10L19,11.41L17.41,13z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
