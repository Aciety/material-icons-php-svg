<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['agreement', 'contract', 'court', 'document', 'gavel', 'government', 'judge', 'law', 'mallet', 'official', 'police', 'rule', 'rules', 'terms'],
)]
final class GavelIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '11.73', y: '3.73', width: '4', height: '20');
        $l2I0->setAttribute('transform', 'matrix(0.7075 -0.7067 0.7067 0.7075 -5.6854 13.7194)');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11.73', y: '1.24', width: '4', height: '8');
        $l2I1->setAttribute('transform', 'matrix(0.707 -0.7072 0.7072 0.707 0.3157 11.246)');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3.24', y: '9.73', width: '4', height: '8');
        $l2I2->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -8.1722 7.7256)');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '1', y: '21', width: '12', height: '2');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
