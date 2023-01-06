<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['audio', 'doc', 'document', 'key', 'music', 'note', 'sound', 'track'],
)]
final class AudioFileTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M13,4H6v16h12V9h-5V4z M16,11v2h-3v3.75c0,1.24-1.01,2.25-2.25,2.25S8.5,17.99,8.5,16.75 c0-1.24,1.01-2.25,2.25-2.25c0.46,0,0.89,0.14,1.25,0.38V11H16z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z M18,20H6V4h7v5h5V20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,14.88c-0.36-0.24-0.79-0.38-1.25-0.38c-1.24,0-2.25,1.01-2.25,2.25c0,1.24,1.01,2.25,2.25,2.25S13,17.99,13,16.75V13 h3v-2h-4V14.88z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
