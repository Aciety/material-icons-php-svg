<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['+', 'add', 'bubble', 'chat', 'comment', 'communicate', 'feedback', 'message', 'new', 'plus', 'speech', 'symbol'],
)]
final class AddCommentSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M22 2H2v16h16l4 4V2zm-5 9h-4v4h-2v-4H7V9h4V5h2v4h4v2z');
        $doc->addChild($l0I0);
    }
}
