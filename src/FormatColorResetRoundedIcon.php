<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['clear', 'color', 'disabled', 'doc', 'droplet', 'edit', 'editing', 'editor', 'enabled', 'fill', 'format', 'off', 'on', 'paint', 'reset', 'sheet', 'slash', 'spreadsheet', 'style', 'text', 'type', 'water', 'writing'],
)]
final class FormatColorResetRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 14c0-3.09-3.6-7.88-5.23-9.87-.4-.49-1.15-.49-1.55 0-.46.57-1.08 1.36-1.73 2.27l8.44 8.44c.04-.28.07-.56.07-.84zm1.29 5.01L6.12 5.84c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l2.61 2.61C6.55 11.33 6 12.79 6 14c0 3.31 2.69 6 6 6 1.52 0 2.9-.57 3.95-1.5l1.92 1.92c.39.39 1.02.39 1.41 0 .4-.38.4-1.02.01-1.41z');
        $doc->addChild($l0I1);
    }
}
