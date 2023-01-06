<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'digit', 'doc', 'edit', 'editing', 'editor', 'format', 'list', 'notes', 'number', 'numbered', 'sheet', 'spreadsheet', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatListNumberedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8 7h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zm12 10H8c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1zm0-6H8c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1zM4.5 16h-2c-.28 0-.5.22-.5.5s.22.5.5.5H4v.5h-.5c-.28 0-.5.22-.5.5s.22.5.5.5H4v.5H2.5c-.28 0-.5.22-.5.5s.22.5.5.5h2c.28 0 .5-.22.5-.5v-3c0-.28-.22-.5-.5-.5zm-2-11H3v2.5c0 .28.22.5.5.5s.5-.22.5-.5v-3c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5s.22.5.5.5zm2 5h-2c-.28 0-.5.22-.5.5s.22.5.5.5h1.3l-1.68 1.96c-.08.09-.12.21-.12.32v.22c0 .28.22.5.5.5h2c.28 0 .5-.22.5-.5s-.22-.5-.5-.5H3.2l1.68-1.96c.08-.09.12-.21.12-.32v-.22c0-.28-.22-.5-.5-.5z');
        $doc->addChild($l0I1);
    }
}
