<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['app', 'application', 'around', 'backup', 'cloud', 'connection', 'drive', 'files', 'folders', 'inprogress', 'internet', 'load', 'loading refresh', 'network', 'renew', 'rotate', 'sky', 'storage', 'turn', 'upload'],
)]
final class CloudSyncRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M24,17.48c0,1.38-1.12,2.5-2.5,2.5L15,20c-1.66,0-3-1.34-3-3c0-1.6,1.26-2.9,2.84-2.98C15.4,12.83,16.6,12,18,12 c1.76,0,3.2,1.3,3.45,2.99c0.02,0,0.03-0.01,0.05-0.01C22.88,14.98,24,16.1,24,17.48z M10,15c0-0.55-0.45-1-1-1s-1,0.45-1,1v1.44 c-1.22-1.1-2-2.67-2-4.44c0-2.38,1.39-4.43,3.4-5.4C9.77,6.42,10,6.04,10,5.63c0-0.71-0.73-1.18-1.37-0.88C5.89,6.03,4,8.79,4,12 c0,2.4,1.06,4.54,2.73,6H5c-0.55,0-1,0.45-1,1s0.45,1,1,1h4c0.55,0,1-0.45,1-1V15z M19,6c0.55,0,1-0.45,1-1s-0.45-1-1-1h-4 c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1s1-0.45,1-1V7.56c0.98,0.89,1.68,2.08,1.92,3.44l2.02,0c-0.25-1.99-1.23-3.74-2.66-5H19z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
