<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['?', 'assistance', 'behavior', 'body', 'brain', 'cognitive', 'function', 'gear', 'head', 'help', 'human', 'info', 'information', 'intellectual', 'mental', 'mind', 'people', 'person', 'preferences', 'psychiatric', 'psychology', 'punctuation', 'question mark', 'science', 'settings', 'social', 'support', 'symbol', 'therapy', 'thinking', 'thoughts'],
)]
final class PsychologyAltTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M13,5c-2.65,0-4.79,2.06-4.97,4.67L6.7,12H8v4h3v3h3v-3.95l0.89-0.42C16.71,13.88,18,12.09,18,10 C18,7.24,15.76,5,13,5z M12.5,14c-0.41,0-0.74-0.33-0.74-0.74c0-0.41,0.33-0.73,0.74-0.73c0.41,0,0.73,0.32,0.73,0.73 C13.23,13.67,12.92,14,12.5,14z M14.26,9.68c-0.44,0.65-0.86,0.85-1.09,1.27c-0.09,0.17-0.13,0.28-0.13,0.82h-1.06 c0-0.29-0.04-0.75,0.18-1.16c0.28-0.51,0.83-0.81,1.14-1.26c0.33-0.47,0.15-1.36-0.8-1.36c-0.62,0-0.92,0.47-1.05,0.86l-0.96-0.4 C10.76,7.67,11.46,7,12.5,7c0.86,0,1.45,0.39,1.75,0.88C14.51,8.31,14.66,9.1,14.26,9.68z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19.94,9.06C19.5,5.73,16.57,3,13,3C9.47,3,6.57,5.61,6.08,9l-1.93,3.48C3.74,13.14,4.22,14,5,14h1l0,2c0,1.1,0.9,2,2,2h1 v3h7l0-4.68C18.62,15.07,20.35,12.24,19.94,9.06z M14.89,14.63L14,15.05V19h-3v-3H8v-4H6.7l1.33-2.33C8.21,7.06,10.35,5,13,5 c2.76,0,5,2.24,5,5C18,12.09,16.71,13.88,14.89,14.63z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12.5,12.54c-0.41,0-0.74,0.31-0.74,0.73c0,0.41,0.33,0.74,0.74,0.74c0.42,0,0.73-0.33,0.73-0.74 C13.23,12.85,12.92,12.54,12.5,12.54z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12.5,7c-1.03,0-1.74,0.67-2,1.45l0.96,0.4c0.13-0.39,0.43-0.86,1.05-0.86c0.95,0,1.13,0.89,0.8,1.36 c-0.32,0.45-0.86,0.75-1.14,1.26c-0.23,0.4-0.18,0.87-0.18,1.16h1.06c0-0.55,0.04-0.65,0.13-0.82c0.23-0.42,0.65-0.62,1.09-1.27 c0.4-0.59,0.25-1.38-0.01-1.8C13.95,7.39,13.36,7,12.5,7z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
