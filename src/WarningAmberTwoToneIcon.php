<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['!', 'alert', 'amber', 'attention', 'caution', 'danger', 'error', 'exclamation', 'important', 'mark', 'notification', 'symbol', 'triangle', 'warning'],
)]
final class WarningAmberTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M1 21h22L12 2 1 21zm3.47-2L12 5.99 19.53 19H4.47zM11 16h2v2h-2zm0-6h2v4h-2z');
        $doc->addChild($l0I0);
    }
}
