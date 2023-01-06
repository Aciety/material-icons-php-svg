<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['calendar', 'date', 'day', 'event', 'insert', 'invitation', 'mark', 'month', 'range', 'remember', 'reminder', 'today', 'week'],
)]
final class InsertInvitationSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H3.01v18H21V3h-3V1h-2zm3 18H5V8h14v11z');
        $doc->addChild($l0I0);
    }
}
