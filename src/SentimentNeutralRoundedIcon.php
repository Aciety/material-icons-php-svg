<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['social'],
    tags: ['emotionless', 'emotions', 'expressions', 'face', 'feelings', 'fine', 'indifference', 'mood', 'neutral', 'okay', 'person', 'sentiment', 'survey'],
)]
final class SentimentNeutralRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.75 15.5h4.5c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-4.5c-.41 0-.75.34-.75.75s.34.75.75.75z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '15.5', cy: '9.5', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '8.5', cy: '9.5', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z');
        $doc->addChild($l0I4);
    }
}
