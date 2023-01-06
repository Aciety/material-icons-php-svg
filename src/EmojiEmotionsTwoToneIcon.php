<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'add', 'emoji', 'emotions', 'expressions', 'face', 'feelings', 'glad', 'happiness', 'happy', 'insert', 'like', 'mood', 'new', 'person', 'pleased', 'plus', 'smile', 'smiling', 'social', 'survey', 'symbol'],
)]
final class EmojiEmotionsTwoToneIcon extends SvgIcon
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,12c0-4.42-3.58-8-8-8s-8,3.58-8,8s3.58,8,8,8S20,16.42,20,12z M8.5,8C9.33,8,10,8.67,10,9.5 S9.33,11,8.5,11S7,10.33,7,9.5S7.67,8,8.5,8z M12,18c-2.28,0-4.22-1.66-5-4h10C16.22,16.34,14.28,18,12,18z M15.5,11 c-0.83,0-1.5-0.67-1.5-1.5S14.67,8,15.5,8S17,8.67,17,9.5S16.33,11,15.5,11z');
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '15.5', cy: '9.5', r: '1.5');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '8.5', cy: '9.5', r: '1.5');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z');
        $l1I1->addChild($l2I4);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
