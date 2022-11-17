<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['add', 'album', 'artist', 'audio', 'cd', 'check', 'circle', 'collection', 'list', 'mark', 'music', 'playlist', 'record', 'sound', 'track'],
)]
final class PlaylistAddCircleOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z M14,10H7v2h7V10z M14,7H7v2h7V7z M7,15h3v-2H7V15z M19,13v2h-2v2h-2v-2h-2v-2h2v-2h2v2H19z');
        $doc->addChild($l0I1);
    }
}
