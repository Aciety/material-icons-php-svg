<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['-website', 'app', 'application desktop', 'asset', 'browser', 'design', 'download', 'image', 'interface', 'internet', 'layout', 'screen', 'site', 'ui', 'ux', 'video', 'web', 'website', 'window', 'www'],
)]
final class WebAssetRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.89-2-2-2zm-1 14H6c-.55 0-1-.45-1-1V8h14v9c0 .55-.45 1-1 1z');
        $doc->addChild($l0I0);
    }
}
