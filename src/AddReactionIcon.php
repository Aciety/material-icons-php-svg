<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'add', 'emoji', 'emotions', 'expressions', 'face', 'feelings', 'glad', 'happiness', 'happy', 'insert', 'like', 'mood', 'new', 'person', 'pleased', 'plus', 'smile', 'smiling', 'social', 'survey', 'symbol'],
)]
final class AddReactionIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18,9V7h-2V2.84C14.77,2.3,13.42,2,11.99,2C6.47,2,2,6.48,2,12s4.47,10,9.99,10C17.52,22,22,17.52,22,12 c0-1.05-0.17-2.05-0.47-3H18z M15.5,8C16.33,8,17,8.67,17,9.5S16.33,11,15.5,11S14,10.33,14,9.5S14.67,8,15.5,8z M8.5,8 C9.33,8,10,8.67,10,9.5S9.33,11,8.5,11S7,10.33,7,9.5S7.67,8,8.5,8z M12,17.5c-2.33,0-4.31-1.46-5.11-3.5h10.22 C16.31,16.04,14.33,17.5,12,17.5z M22,3h2v2h-2v2h-2V5h-2V3h2V1h2V3z');
        $doc->addChild($l0I1);
    }
}
