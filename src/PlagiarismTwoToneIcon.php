<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['doc', 'document', 'find', 'glass', 'look', 'magnifying', 'page', 'paper', 'plagiarism', 'search', 'see'],
)]
final class PlagiarismTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M13,4H6v16l12,0V9h-5V4z M13.97,11.03c1.12,1.12,1.31,2.8,0.59,4.13l1.88,1.88l-1.41,1.41l-1.88-1.88 c-1.33,0.71-3.01,0.53-4.13-0.59c-1.37-1.37-1.37-3.58,0-4.95C10.39,9.66,12.61,9.66,13.97,11.03z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '11.5', cy: '13.5', r: '1.5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2V8L14,2z M18,20L6,20V4h7v5h5V20z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M9.03,11.03c-1.37,1.37-1.37,3.58,0,4.95c1.12,1.12,2.8,1.31,4.13,0.59l1.88,1.88l1.41-1.41l-1.88-1.88 c0.71-1.33,0.53-3.01-0.59-4.13C12.61,9.66,10.39,9.66,9.03,11.03z M12.56,14.56c-0.59,0.59-1.54,0.59-2.12,0 c-0.59-0.59-0.59-1.54,0-2.12c0.59-0.59,1.54-0.59,2.12,0C13.15,13.03,13.15,13.97,12.56,14.56z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
