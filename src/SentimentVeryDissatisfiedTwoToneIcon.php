<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['angry', 'disappointed', 'dislike', 'dissatisfied', 'emotions', 'expressions', 'face', 'feelings', 'mood', 'person', 'sad', 'sentiment', 'sorrow', 'survey', 'unhappy', 'unsatisfied', 'upset', 'very'],
)]
final class SentimentVeryDissatisfiedTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zM6.76 8.82l1.06-1.06 1.06 1.06 1.06-1.06L11 8.82 9.94 9.88 11 10.94 9.94 12l-1.06-1.06L7.82 12l-1.06-1.06 1.06-1.06-1.06-1.06zM6.89 17c.8-2.04 2.78-3.5 5.11-3.5s4.31 1.46 5.11 3.5H6.89zm10.35-6.06L16.18 12l-1.06-1.06L14.06 12 13 10.94l1.06-1.06L13 8.82l1.06-1.06 1.06 1.06 1.06-1.06 1.06 1.06-1.06 1.06 1.06 1.06z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12 13.5c-2.33 0-4.31 1.46-5.11 3.5h10.22c-.8-2.04-2.78-3.5-5.11-3.5zM7.82 12l1.06-1.06L9.94 12 11 10.94 9.94 9.88 11 8.82 9.94 7.76 8.88 8.82 7.82 7.76 6.76 8.82l1.06 1.06-1.06 1.06zm4.17-10C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm4.18-12.24l-1.06 1.06-1.06-1.06L13 8.82l1.06 1.06L13 10.94 14.06 12l1.06-1.06L16.18 12l1.06-1.06-1.06-1.06 1.06-1.06z');
        $doc->addChild($l0I2);
    }
}
