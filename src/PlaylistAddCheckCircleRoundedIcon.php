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
final class PlaylistAddCheckCircleRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10c5.52,0,10-4.48,10-10C22,6.48,17.52,2,12,2z M7,8c0-0.55,0.45-1,1-1h5 c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H8C7.45,9,7,8.55,7,8L7,8z M7,11c0-0.55,0.45-1,1-1h5c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1 H8C7.45,12,7,11.55,7,11L7,11z M10,14c0,0.55-0.45,1-1,1H8c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h1C9.55,13,10,13.45,10,14L10,14z M18.29,14.12l-3.54,3.54c-0.39,0.39-1.02,0.39-1.41,0l-1.41-1.41c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0 l0.71,0.71l2.83-2.83c0.39-0.39,1.02-0.39,1.41,0C18.68,13.1,18.68,13.73,18.29,14.12z');
        $doc->addChild($l0I1);
    }
}
