<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bio', 'eco', 'green', 'loop', 'recyclable', 'recycle', 'recycling', 'rotate', 'sustainability', 'sustainable', 'trash'],
)]
final class RecyclingRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6.2 7.41c-.23-.14-.31-.45-.17-.68L7.2 4.78l1.03-1.71c.39-.65 1.33-.65 1.72 0l1.48 2.46-1.23 2.06-.72 1.2c-.16.23-.47.31-.71.17L6.2 7.41zm15.52 5.56-1.34-2.24c-.14-.23-.44-.31-.68-.18l-2.6 1.5c-.24.14-.32.45-.18.69L18.87 16h1.09c.61 0 1.2-.26 1.59-.73.3-.37.45-.82.45-1.27 0-.36-.1-.71-.28-1.03zM16 21h1.5c.76 0 1.45-.43 1.79-1.11L20.74 17H16v-.79c0-.45-.54-.67-.85-.35l-2.79 2.79c-.2.2-.2.51 0 .71l2.79 2.79c.31.31.85.09.85-.35V21zm-6.5-4H5.7l-.84 1.41c-.3.5-.32 1.12-.06 1.65.28.57.87.94 1.52.94H9.5c.28 0 .5-.22.5-.5v-3c0-.28-.22-.5-.5-.5zm-3.38-2.65.7.42c.38.23.85-.12.74-.55l-.96-3.84c-.06-.26-.33-.43-.6-.36l-3.83.96c-.43.11-.52.68-.14.91l.66.4-.41.69c-.35.59-.38 1.31-.07 1.92l1.63 3.26 2.28-3.81zm10.9-9.21-1.3-2.17C15.35 2.37 14.7 2 14 2h-3.53l3.12 5.2-.69.41c-.38.23-.3.81.14.91l3.83.96c.27.07.54-.1.61-.36l.96-3.83c.11-.43-.36-.78-.74-.55l-.68.4z');
        $doc->addChild($l0I1);
    }
}
