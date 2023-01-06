<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['doc', 'document', 'find', 'glass', 'look', 'magnifying', 'page', 'paper', 'plagiarism', 'search', 'see'],
)]
final class PlagiarismIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2V8L14,2z M15.04,19.45l-1.88-1.88 c-1.33,0.71-3.01,0.53-4.13-0.59c-1.37-1.37-1.37-3.58,0-4.95c1.37-1.37,3.58-1.37,4.95,0c1.12,1.12,1.31,2.8,0.59,4.13l1.88,1.88 L15.04,19.45z M13,9V3.5L18.5,9H13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '11.5', cy: '14.5', r: '1.5');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
