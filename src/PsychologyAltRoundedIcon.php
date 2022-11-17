<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['?', 'assistance', 'behavior', 'body', 'brain', 'cognitive', 'function', 'gear', 'head', 'help', 'human', 'info', 'information', 'intellectual', 'mental', 'mind', 'people', 'person', 'preferences', 'psychiatric', 'psychology', 'punctuation', 'question mark', 'science', 'settings', 'social', 'support', 'symbol', 'therapy', 'thinking', 'thoughts'],
)]
final class PsychologyAltRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19.94,9.06C19.5,5.73,16.57,3,13,3C9.47,3,6.57,5.61,6.08,9l-1.93,3.48C3.74,13.14,4.22,14,5,14h1l0,2c0,1.1,0.9,2,2,2h1 v2c0,0.55,0.45,1,1,1h5c0.55,0,1-0.45,1-1l0-3.68C18.62,15.07,20.35,12.24,19.94,9.06z M12.5,14c-0.41,0-0.74-0.33-0.74-0.74 c0-0.41,0.33-0.73,0.74-0.73c0.41,0,0.73,0.32,0.73,0.73C13.23,13.67,12.92,14,12.5,14z M14.26,9.68 c-0.44,0.65-0.86,0.85-1.09,1.27c-0.09,0.17-0.13,0.28-0.13,0.82h-1.06c0-0.29-0.04-0.75,0.18-1.16c0.28-0.51,0.83-0.81,1.14-1.26 c0.33-0.47,0.15-1.36-0.8-1.36c-0.62,0-0.92,0.47-1.05,0.86l-0.96-0.4C10.76,7.67,11.46,7,12.5,7c0.86,0,1.45,0.39,1.75,0.88 C14.51,8.31,14.66,9.1,14.26,9.68z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
