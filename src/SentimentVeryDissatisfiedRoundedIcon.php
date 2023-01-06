<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['social'],
    tags: ['angry', 'disappointed', 'dislike', 'dissatisfied', 'emotions', 'expressions', 'face', 'feelings', 'mood', 'person', 'sad', 'sentiment', 'sorrow', 'survey', 'unhappy', 'unsatisfied', 'upset', 'very'],
)]
final class SentimentVeryDissatisfiedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 13.5c-2.03 0-3.8 1.11-4.75 2.75-.19.33.06.75.44.75h8.62c.38 0 .63-.42.44-.75-.95-1.64-2.72-2.75-4.75-2.75zm-3.65-2.03l.53-.53.53.53c.29.29.77.29 1.06 0 .29-.29.29-.77 0-1.06l-.53-.53.53-.53c.29-.29.29-.77 0-1.06-.29-.29-.77-.29-1.06 0l-.53.53-.53-.53c-.29-.29-.77-.29-1.06 0-.29.29-.29.77 0 1.06l.53.53-.53.53c-.29.29-.29.77 0 1.06.29.29.77.29 1.06 0zM11.99 2C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.65-11.71l-.53.53-.53-.53c-.29-.29-.77-.29-1.06 0-.29.29-.29.77 0 1.06l.53.53-.53.53c-.29.29-.29.77 0 1.06.29.29.77.29 1.06 0l.53-.53.53.53c.29.29.77.29 1.06 0 .29-.29.29-.77 0-1.06l-.53-.53.53-.53c.29-.29.29-.77 0-1.06-.29-.29-.77-.29-1.06 0z');
        $doc->addChild($l0I1);
    }
}
