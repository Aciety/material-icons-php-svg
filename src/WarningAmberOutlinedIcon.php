<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['!', 'alert', 'amber', 'attention', 'caution', 'danger', 'error', 'exclamation', 'important', 'mark', 'notification', 'symbol', 'triangle', 'warning'],
)]
final class WarningAmberOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z');
        $doc->addChild($l0I0);
    }
}
