<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['cancel', 'close', 'email', 'envelop', 'letter', 'mail', 'message', 'newsletter', 'off', 'remove', 'send', 'subscribe', 'unsubscribe'],
)]
final class UnsubscribeIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M18.5 13c-1.93 0-3.5 1.57-3.5 3.5s1.57 3.5 3.5 3.5 3.5-1.57 3.5-3.5-1.57-3.5-3.5-3.5zm2 4h-4v-1h4v1zm-6.95 0c-.02-.17-.05-.33-.05-.5 0-2.76 2.24-5 5-5 .92 0 1.76.26 2.5.69V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h8.55zM12 10.5L5 7V5l7 3.5L19 5v2l-7 3.5z');
        $doc->addChild($l0I0);
    }
}
