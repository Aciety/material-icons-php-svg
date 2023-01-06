<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['file'],
    tags: ['data', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'open', 'sheet', 'slide', 'storage'],
)]
final class FolderOpenSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 6H12l-2-2H2v16h20V6zm-2 12H4V8h16v10z');
        $doc->addChild($l0I1);
    }
}
