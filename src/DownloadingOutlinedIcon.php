<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['arrow', 'circle', 'down', 'download', 'downloading', 'downloads', 'install', 'pending', 'progress', 'upload'],
)]
final class DownloadingOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18.32,4.26C16.84,3.05,15.01,2.25,13,2.05v2.02c1.46,0.18,2.79,0.76,3.9,1.62L18.32,4.26z M19.93,11h2.02 c-0.2-2.01-1-3.84-2.21-5.32L18.31,7.1C19.17,8.21,19.75,9.54,19.93,11z M18.31,16.9l1.43,1.43c1.21-1.48,2.01-3.32,2.21-5.32 h-2.02C19.75,14.46,19.17,15.79,18.31,16.9z M13,19.93v2.02c2.01-0.2,3.84-1,5.32-2.21l-1.43-1.43 C15.79,19.17,14.46,19.75,13,19.93z M15.59,10.59L13,13.17V7h-2v6.17l-2.59-2.59L7,12l5,5l5-5L15.59,10.59z M11,19.93v2.02 c-5.05-0.5-9-4.76-9-9.95s3.95-9.45,9-9.95v2.02C7.05,4.56,4,7.92,4,12S7.05,19.44,11,19.93z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
