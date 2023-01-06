<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['around', 'arrows', 'find', 'glass', 'inprogress', 'load', 'loading refresh', 'look', 'magnify', 'magnifying', 'renew', 'replace', 'rotate', 'search', 'see'],
)]
final class FindReplaceRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11 6c1.38 0 2.63.56 3.54 1.46l-1.69 1.69c-.31.31-.09.85.36.85h4.29c.28 0 .5-.22.5-.5V5.21c0-.45-.54-.67-.85-.35l-1.2 1.2C14.68 4.78 12.93 4 11 4 7.96 4 5.38 5.94 4.42 8.64c-.24.66.23 1.36.93 1.36.42 0 .79-.26.93-.66C6.96 7.4 8.82 6 11 6zm5.64 9.14c.4-.54.72-1.15.95-1.8.23-.65-.25-1.34-.94-1.34-.42 0-.79.26-.93.66C15.04 14.6 13.18 16 11 16c-1.38 0-2.63-.56-3.54-1.46l1.69-1.69c.31-.31.09-.85-.36-.85H4.5c-.28 0-.5.22-.5.5v4.29c0 .45.54.67.85.35l1.2-1.2C7.32 17.22 9.07 18 11 18c1.55 0 2.98-.51 4.14-1.36l4.11 4.11c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49l-4.1-4.12z');
        $doc->addChild($l0I1);
    }
}
