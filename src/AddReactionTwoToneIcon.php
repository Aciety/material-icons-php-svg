<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'add', 'emoji', 'emotions', 'expressions', 'face', 'feelings', 'glad', 'happiness', 'happy', 'insert', 'like', 'mood', 'new', 'person', 'pleased', 'plus', 'smile', 'smiling', 'social', 'survey', 'symbol'],
)]
final class AddReactionTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.41,9H18V7h-2V5.08C14.82,4.4,13.46,4,12,4c-4.42,0-8,3.58-8,8s3.58,8,8,8s8-3.58,8-8 C20,10.94,19.79,9.93,19.41,9z M15.5,8C16.33,8,17,8.67,17,9.5c0,0.83-0.67,1.5-1.5,1.5S14,10.33,14,9.5C14,8.67,14.67,8,15.5,8z M8.5,8C9.33,8,10,8.67,10,9.5c0,0.83-0.67,1.5-1.5,1.5S7,10.33,7,9.5C7,8.67,7.67,8,8.5,8z M12,17.5c-2.33,0-4.31-1.46-5.11-3.5 h10.22C16.31,16.04,14.33,17.5,12,17.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M7,9.5C7,8.67,7.67,8,8.5,8S10,8.67,10,9.5c0,0.83-0.67,1.5-1.5,1.5S7,10.33,7,9.5z M12,17.5c2.33,0,4.31-1.46,5.11-3.5 H6.89C7.69,16.04,9.67,17.5,12,17.5z M15.5,11c0.83,0,1.5-0.67,1.5-1.5C17,8.67,16.33,8,15.5,8S14,8.67,14,9.5 C14,10.33,14.67,11,15.5,11z M22,1h-2v2h-2v2h2v2h2V5h2V3h-2V1z M20,12c0,4.42-3.58,8-8,8s-8-3.58-8-8c0-4.42,3.58-8,8-8 c1.46,0,2.82,0.4,4,1.08V2.84C14.77,2.3,13.42,2,11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12 c0-1.05-0.17-2.05-0.47-3h-2.13C19.78,9.93,20,10.94,20,12z');
        $doc->addChild($l0I2);
    }
}
