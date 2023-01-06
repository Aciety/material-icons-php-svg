<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['bubble', 'chat', 'comment', 'communicate', 'feedback', 'message', 'mode comment', 'speech'],
)]
final class ModeCommentSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M22 2H2v16h16l4 4z');
        $doc->addChild($l0I0);
    }
}
