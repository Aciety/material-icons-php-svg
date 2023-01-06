<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['bubble', 'cam', 'camera', 'chat', 'comment', 'communicate', 'facetime', 'feedback', 'message', 'speech', 'video', 'voice'],
)]
final class VoiceChatSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 2H2.01L2 22l4-4h16V2zm-4 12l-4-3.2V14H6V6h8v3.2L18 6v8z');
        $doc->addChild($l0I1);
    }
}
