<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['add', 'approve', 'check', 'collection', 'complete', 'done', 'list', 'mark', 'music', 'ok', 'playlist', 'select', 'tick', 'validate', 'verified', 'yes'],
)]
final class PlaylistAddCheckRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M13 10H3c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zm0-4H3c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zM3 16h6c.55 0 1-.45 1-1s-.45-1-1-1H3c-.55 0-1 .45-1 1s.45 1 1 1zm19.21-3.79l.09.09c.39.39.39 1.02 0 1.41l-5.58 5.59c-.39.39-1.02.39-1.41 0l-3.09-3.09c-.39-.39-.39-1.02 0-1.41l.09-.09c.39-.39 1.02-.39 1.41 0l2.3 2.3 4.78-4.79c.38-.4 1.02-.4 1.41-.01z');
        $doc->addChild($l0I0);
    }
}
