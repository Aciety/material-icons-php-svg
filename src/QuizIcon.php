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
final class QuizIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4,6H2v14c0,1.1,0.9,2,2,2h14v-2H4V6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M14.01,15 c-0.59,0-1.05-0.47-1.05-1.05c0-0.59,0.47-1.04,1.05-1.04c0.59,0,1.04,0.45,1.04,1.04C15.04,14.53,14.6,15,14.01,15z M16.51,8.83 c-0.63,0.93-1.23,1.21-1.56,1.81c-0.13,0.24-0.18,0.4-0.18,1.18h-1.52c0-0.41-0.06-1.08,0.26-1.65c0.41-0.73,1.18-1.16,1.63-1.8 c0.48-0.68,0.21-1.94-1.14-1.94c-0.88,0-1.32,0.67-1.5,1.23l-1.37-0.57C11.51,5.96,12.52,5,13.99,5c1.23,0,2.08,0.56,2.51,1.26 C16.87,6.87,17.08,7.99,16.51,8.83z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
