<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['?', 'assistance', 'faq', 'help', 'info', 'information', 'punctuation', 'question mark', 'quiz', 'support', 'symbol', 'test'],
)]
final class QuizRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M17,20H4V7c0-0.55-0.45-1-1-1S2,6.45,2,7v13c0,1.1,0.9,2,2,2h13c0.55,0,1-0.45,1-1S17.55,20,17,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M14.01,15 c-0.59,0-1.05-0.47-1.05-1.05c0-0.59,0.47-1.04,1.05-1.04c0.59,0,1.04,0.45,1.04,1.04C15.04,14.53,14.6,15,14.01,15z M16.51,8.83 c-0.63,0.93-1.23,1.21-1.56,1.81c-0.08,0.14-0.13,0.26-0.16,0.49c-0.05,0.39-0.36,0.68-0.75,0.68h-0.03 c-0.44,0-0.79-0.38-0.75-0.82c0.03-0.28,0.09-0.57,0.25-0.84c0.41-0.73,1.18-1.16,1.63-1.8c0.48-0.68,0.21-1.94-1.14-1.94 c-0.61,0-1.01,0.32-1.26,0.7c-0.19,0.29-0.57,0.39-0.89,0.25l0,0c-0.42-0.18-0.6-0.7-0.34-1.07C12.02,5.55,12.87,5,13.99,5 c1.23,0,2.08,0.56,2.51,1.26C16.87,6.87,17.08,7.99,16.51,8.83z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
