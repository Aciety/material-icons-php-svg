<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['alert', 'announcement', 'campaign', 'loud', 'megaphone', 'microphone', 'notification', 'speaker'],
)]
final class CampaignTwoToneIcon extends SvgIcon
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
        $l0I1 = new SVGPath(d: 'M18,11c0,0.67,0,1.33,0,2c1.2,0,2.76,0,4,0c0-0.67,0-1.33,0-2C20.76,11,19.2,11,18,11z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M16,17.61c0.96,0.71,2.21,1.65,3.2,2.39c0.4-0.53,0.8-1.07,1.2-1.6c-0.99-0.74-2.24-1.68-3.2-2.4 C16.8,16.54,16.4,17.08,16,17.61z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M20.4,5.6C20,5.07,19.6,4.53,19.2,4c-0.99,0.74-2.24,1.68-3.2,2.4c0.4,0.53,0.8,1.07,1.2,1.6 C18.16,7.28,19.41,6.35,20.4,5.6z');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M4,9c-1.1,0-2,0.9-2,2v2c0,1.1,0.9,2,2,2h1v4h2v-4h1l5,3V6L8,9H4z M9.03,10.71L11,9.53v4.94l-1.97-1.18L8.55,13H8H4v-2h4 h0.55L9.03,10.71z');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M15.5,12c0-1.33-0.58-2.53-1.5-3.35v6.69C14.92,14.53,15.5,13.33,15.5,12z');
        $doc->addChild($l0I5);
        $l0I6 = new SVGPath(d: 'M9.03,10.71L11,9.53v4.94l-1.97-1.18L8.55,13H8H4v-2h4h0.55L9.03,10.71z');
        $l0I6->setStyle('opacity', '.3');
        $doc->addChild($l0I6);
    }
}
