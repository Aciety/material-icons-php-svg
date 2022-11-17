<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['fingers', 'gesture', 'hand', 'hands', 'human', 'move', 'pan', 'scan', 'stop', 'tool'],
)]
final class PanToolTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.5 5.65c-.28 0-.5.22-.5.5V12h-2V3.42c0-.28-.22-.5-.5-.5s-.5.22-.5.5V12h-2V2.51c0-.28-.22-.5-.5-.5s-.5.22-.5.5V12h-2V4.79c0-.28-.22-.5-.5-.5s-.5.23-.5.5v12.87l-5.35-2.83-.51.45 5.86 6.1c.38.39.9.62 1.44.62H18c1.1 0 2-.9 2-2V6.15c0-.28-.22-.5-.5-.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M19.5 3.65c-.17 0-.34.02-.5.05v-.28c0-1.38-1.12-2.5-2.5-2.5-.33 0-.65.06-.94.18C15.11.44 14.35.01 13.5.01c-1.32 0-2.41 1.03-2.49 2.33-.16-.03-.33-.05-.51-.05-1.38 0-2.5 1.12-2.5 2.5v9.55l-2.41-1.28c-.73-.39-1.64-.28-2.26.27l-2.07 1.83 7.3 7.61c.75.78 1.8 1.23 2.89 1.23H18c2.21 0 4-1.79 4-4V6.15c0-1.38-1.12-2.5-2.5-2.5zM20 20c0 1.1-.9 2-2 2h-6.55c-.54 0-1.07-.22-1.44-.62l-5.86-6.11.51-.45L10 17.66V4.79c0-.28.22-.5.5-.5s.5.23.5.5V12h2V2.51c0-.28.22-.5.5-.5s.5.22.5.5V12h2V3.42c0-.28.22-.5.5-.5s.5.22.5.5V12h2V6.15c0-.28.22-.5.5-.5s.5.22.5.5V20z');
        $doc->addChild($l0I2);
    }
}
