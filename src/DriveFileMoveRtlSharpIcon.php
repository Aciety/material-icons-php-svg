<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'arrows', 'data', 'direction', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'left', 'move', 'rtl', 'sheet', 'side', 'slide', 'storage'],
)]
final class DriveFileMoveRtlSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,6H12l-2-2H2v16h20V6z M12,17l-4-4l4-4v3h4v2h-4V17z');
        $doc->addChild($l0I1);
    }
}
