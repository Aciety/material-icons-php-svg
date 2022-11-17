<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'digit', 'doc', 'edit', 'editing', 'editor', 'format', 'list', 'notes', 'number', 'numbered', 'rtl', 'sheet', 'spreadsheet', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatListNumberedRtlRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.5 16h-2c-.28 0-.5.22-.5.5s.22.5.5.5H20v.5h-.5c-.28 0-.5.22-.5.5s.22.5.5.5h.5v.5h-1.5c-.28 0-.5.22-.5.5s.22.5.5.5h2c.28 0 .5-.22.5-.5v-3c0-.28-.22-.5-.5-.5zm-2-11h.5v2.5c0 .28.22.5.5.5s.5-.22.5-.5v-3c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5s.22.5.5.5zm2.5 5.72v-.22c0-.28-.22-.5-.5-.5h-2c-.28 0-.5.22-.5.5s.22.5.5.5h1.3l-1.68 1.96c-.08.09-.12.21-.12.32v.22c0 .28.22.5.5.5h2c.28 0 .5-.22.5-.5s-.22-.5-.5-.5h-1.3l1.68-1.96c.08-.09.12-.21.12-.32zM15 5H3c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1zm0 12H3c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1zm0-6H3c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z');
        $doc->addChild($l0I1);
    }
}
