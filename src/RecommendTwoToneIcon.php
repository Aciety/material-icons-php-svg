<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['approved', 'circle', 'confirm', 'favorite', 'gesture', 'hand', 'like', 'reaction', 'recommend', 'social', 'support', 'thumbs', 'up', 'well'],
)]
final class RecommendTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,4c-4.41,0-8,3.59-8,8s3.59,8,8,8s8-3.59,8-8S16.41,4,12,4z M17.9,12.3 l-2.1,4.9c-0.22,0.51-0.74,0.83-1.3,0.8H9c-1.1,0-2-0.9-2-2v-5c-0.02-0.38,0.13-0.74,0.4-1L12,5l0.69,0.69 c0.18,0.19,0.29,0.44,0.3,0.7v0.2L12.41,10H17c0.55,0,1,0.45,1,1v0.8C18.02,11.97,17.98,12.15,17.9,12.3z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M17,10h-4.59l0.58-3.41v-0.2c-0.01-0.26-0.12-0.51-0.3-0.7L12,5l-4.6,5c-0.27,0.26-0.42,0.62-0.4,1v5c0,1.1,0.9,2,2,2h5.5 c0.56,0.03,1.08-0.29,1.3-0.8l2.1-4.9c0.08-0.15,0.12-0.33,0.1-0.5V11C18,10.45,17.55,10,17,10z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
