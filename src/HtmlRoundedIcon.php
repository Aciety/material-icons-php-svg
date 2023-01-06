<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'brackets', 'character', 'code', 'css', 'develop', 'developer', 'engineer', 'engineering', 'font', 'html', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class HtmlRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,15c-0.55,0-1-0.45-1-1V9.75C20,9.34,20.34,9,20.75,9s0.75,0.34,0.75,0.75v3.75h1.75c0.41,0,0.75,0.34,0.75,0.75 c0,0.41-0.34,0.75-0.75,0.75H21z M16,10.49h1v3.76c0,0.41,0.34,0.75,0.75,0.75s0.75-0.34,0.75-0.75V10c0-0.55-0.45-1-1-1H13 c-0.55,0-1,0.45-1,1v4.25c0,0.41,0.34,0.75,0.75,0.75s0.75-0.34,0.75-0.75V10.5h1v2.75c0,0.41,0.34,0.75,0.75,0.75 S16,13.66,16,13.25V10.49z M5,9.75C5,9.34,4.66,9,4.25,9S3.5,9.34,3.5,9.75V11h-2V9.75C1.5,9.34,1.16,9,0.75,9S0,9.34,0,9.75v4.5 C0,14.66,0.34,15,0.75,15s0.75-0.34,0.75-0.75V12.5h2v1.75C3.5,14.66,3.84,15,4.25,15S5,14.66,5,14.25V9.75z M10.25,10.5 c0.41,0,0.75-0.34,0.75-0.75C11,9.34,10.66,9,10.25,9h-3.5C6.34,9,6,9.34,6,9.75c0,0.41,0.34,0.75,0.75,0.75h1v3.75 C7.75,14.66,8.09,15,8.5,15s0.75-0.34,0.75-0.75V10.5H10.25z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
