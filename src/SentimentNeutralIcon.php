<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['emotionless', 'emotions', 'expressions', 'face', 'feelings', 'fine', 'indifference', 'mood', 'neutral', 'okay', 'person', 'sentiment', 'survey'],
)]
final class SentimentNeutralIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9 15.5h6v1H9v-1z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '15.5', cy: '9.5', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '8.5', cy: '9.5', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z');
        $doc->addChild($l0I4);
    }
}
