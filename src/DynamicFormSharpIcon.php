<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bolt', 'code', 'dynamic', 'electric', 'fast', 'form', 'lightning', 'lists', 'questionnaire', 'thunderbolt'],
)]
final class DynamicFormSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M17,20v-9h-2V4h7l-2,5h2L17,20z M15,13v7H2v-7H15z M6.25,15.75h-1.5v1.5h1.5V15.75z M13,4v7H2V4H13z M6.25,6.75h-1.5v1.5 h1.5V6.75z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
