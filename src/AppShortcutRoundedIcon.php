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
    tags: ['app', 'bookmarked', 'favorite', 'highlight', 'important', 'marked', 'mobile', 'save', 'saved', 'shortcut', 'software', 'special', 'star'],
)]
final class AppShortcutRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M17,18H7V6h10v1h2V3c0-1.1-0.9-2-2-2H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2v-4h-2V18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20.38,9.62l0.4,0.87c0.09,0.2,0.37,0.2,0.46,0l0.4-0.87l0.87-0.4c0.2-0.09,0.2-0.37,0-0.46l-0.87-0.4l-0.4-0.87 c-0.09-0.2-0.37-0.2-0.46,0l-0.4,0.87l-0.87,0.4c-0.2,0.09-0.2,0.37,0,0.46L20.38,9.62z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M15.54,9l-0.79,1.75L13,11.54c-0.39,0.18-0.39,0.73,0,0.91l1.75,0.79L15.54,15c0.18,0.39,0.73,0.39,0.91,0l0.79-1.75 L19,12.46c0.39-0.18,0.39-0.73,0-0.91l-1.75-0.79L16.46,9C16.28,8.61,15.72,8.61,15.54,9z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20.77,13.5l-0.4,0.87l-0.87,0.4c-0.2,0.09-0.2,0.37,0,0.46l0.87,0.4l0.4,0.87c0.09,0.2,0.37,0.2,0.46,0l0.4-0.87 l0.87-0.4c0.2-0.09,0.2-0.37,0-0.46l-0.87-0.4l-0.4-0.87C21.14,13.31,20.86,13.31,20.77,13.5z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
