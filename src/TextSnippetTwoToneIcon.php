<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['data', 'doc', 'document', 'file', 'note', 'notes', 'snippet', 'storage', 'text', 'writing'],
)]
final class TextSnippetTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M14.17,5L19,9.83V19H5V5L14.17,5L14.17,5 M7,15h10v2H7V15z M7,11h10v2H7V11z M7,7h7v2H7V7z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M14.17,5L19,9.83V19H5V5L14.17,5L14.17,5 M14.17,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V9.83 c0-0.53-0.21-1.04-0.59-1.41l-4.83-4.83C15.21,3.21,14.7,3,14.17,3L14.17,3z M7,15h10v2H7V15z M7,11h10v2H7V11z M7,7h7v2H7V7z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
