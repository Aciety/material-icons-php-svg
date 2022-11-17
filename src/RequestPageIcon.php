<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['data', 'doc', 'document', 'drive', 'file', 'folder', 'folders', 'page', 'paper', 'request', 'sheet', 'slide', 'writing'],
)]
final class RequestPageIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z M15,11h-4v1h3c0.55,0,1,0.45,1,1v3 c0,0.55-0.45,1-1,1h-1v1h-2v-1H9v-2h4v-1h-3c-0.55,0-1-0.45-1-1v-3c0-0.55,0.45-1,1-1h1V8h2v1h2V11z');
        $doc->addChild($l0I1);
    }
}
