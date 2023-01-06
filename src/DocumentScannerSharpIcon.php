<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['article', 'data', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'notes', 'page', 'paper', 'scan', 'scanner', 'sheet', 'slide', 'text', 'writing'],
)]
final class DocumentScannerSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7,3H4v3H2V1h5V3z M22,6V1h-5v2h3v3H22z M7,21H4v-3H2v5h5V21z M20,18v3h-3v2h5v-5H20z M19,4v16H5V4H19z M15,8H9v2h6V8z M15,11H9v2h6V11z M15,14H9v2h6V14z');
        $doc->addChild($l0I1);
    }
}
