<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['av'],
    tags: ['add', 'album', 'artist', 'audio', 'cd', 'check', 'circle', 'collection', 'list', 'mark', 'music', 'playlist', 'record', 'sound', 'track'],
)]
final class PlaylistAddCircleSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M7,7h7v2H7V7z M10,15H7v-2h3V15z M7,12v-2h7v2H7z M19,15h-2v2h-2v-2h-2v-2h2v-2h2v2h2V15z');
        $doc->addChild($l0I1);
    }
}
