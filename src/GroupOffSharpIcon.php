<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['body', 'club', 'collaboration', 'crowd', 'gathering', 'group', 'human', 'meeting', 'off', 'people', 'person', 'social', 'teams'],
)]
final class GroupOffSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15,8c0-1.42-0.5-2.73-1.33-3.76C14.09,4.1,14.53,4,15,4c2.21,0,4,1.79,4,4s-1.79,4-4,4c-0.06,0-0.12,0-0.18,0l-0.77-0.77 C14.65,10.29,15,9.18,15,8z M22.83,20H23v-3c0-2.18-3.58-3.47-6.34-3.87c1.1,0.75,1.95,1.71,2.23,2.94L22.83,20z M7.24,4.41 C7.77,4.15,8.37,4,9,4c2.21,0,4,1.79,4,4c0,0.63-0.15,1.23-0.41,1.76L7.24,4.41z M9.17,12C9.11,12,9.06,12,9,12c-2.21,0-4-1.79-4-4 c0-0.06,0-0.11,0-0.17L0.69,3.51L2.1,2.1l19.8,19.8l-1.41,1.41L17,19.83V20H1v-3c0-2.66,5.33-4,8-4c0.37,0,0.8,0.03,1.25,0.08 L9.17,12z');
        $doc->addChild($l0I1);
    }
}
