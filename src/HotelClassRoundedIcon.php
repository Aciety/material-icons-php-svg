<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['achievement', 'bookmark', 'class', 'favorite', 'highlight', 'hotel', 'important', 'marked', 'rank', 'ranking', 'rate', 'rating', 'reward', 'save', 'saved', 'shape', 'special', 'star'],
)]
final class HotelClassRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8.58 10H2.56c-.49 0-.69.62-.29.91l4.91 3.51-1.89 6.1c-.14.46.39.84.78.55L11 17.31l4.93 3.75c.39.29.92-.08.78-.55l-1.89-6.1 4.91-3.51c.4-.28.2-.91-.29-.91h-6.02l-1.95-6.42c-.14-.47-.81-.47-.96 0L8.58 10zM20.9 20.51l-1.4-4.52 2.91-2.08c.4-.28.2-.91-.29-.91h-1.88l-3.08 2.2 1.46 4.72 1.5 1.14c.39.29.92-.09.78-.55zM17 8l-1.34-4.42c-.14-.47-.81-.47-.96 0l-.57 1.87.78 2.55H17z');
        $doc->addChild($l0I1);
    }
}
