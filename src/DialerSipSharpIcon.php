<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['alphabet', 'call', 'cell', 'character', 'contact', 'device', 'dialer', 'font', 'hardware', 'initiation', 'internet', 'letter', 'mobile', 'over', 'phone', 'protocol', 'routing', 'session', 'sip', 'symbol', 'telephone', 'text', 'type', 'voice'],
)]
final class DialerSipSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16 3h1v5h-1zm-1 2h-2V4h2V3h-3v3h2v1h-2v1h3zm3-2v5h1V6h2V3h-3zm2 2h-1V4h1v1zm1 10.46l-5.27-.61-2.52 2.52c-2.83-1.44-5.15-3.75-6.59-6.59l2.53-2.53L8.54 3H3.03C2.45 13.18 10.82 21.55 21 20.97v-5.51z');
        $doc->addChild($l0I1);
    }
}
