<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['?', 'assistance', 'battery', 'cell', 'charge', 'help', 'info', 'information', 'mobile', 'power', 'punctuation', 'question mark', 'support', 'symbol', 'unknown'],
)]
final class BatteryUnknownRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.67 4H14V3c0-.55-.45-1-1-1h-2c-.55 0-1 .45-1 1v1H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.34 22h7.32c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4zM13 18h-2v-2h2v2zm1.3-5.31s-.38.42-.67.71c-.14.14-.27.31-.39.47l-.09.15c-.08.12-.14.25-.19.37-.09.22-.16.43-.16.61h-1.6c0-.42.12-.8.29-1.13.06-.11.13-.21.2-.31.03-.05.06-.11.1-.16.11-.14.23-.28.34-.4l.93-.94c.27-.27.44-.65.44-1.06 0-.83-.67-1.5-1.5-1.5-.65 0-1.21.41-1.41.99-.11.31-.39.51-.71.51-.52 0-.88-.52-.71-1.01C9.59 8.83 10.69 8 12 8c1.66 0 3 1.34 3 3 0 .66-.27 1.26-.7 1.69z');
        $doc->addChild($l0I1);
    }
}
