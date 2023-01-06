<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['answer', 'bubble', 'chat', 'comment', 'communicate', 'conversation', 'feedback', 'message', 'question', 'speech', 'talk'],
)]
final class QuestionAnswerSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 6h-3v9H6v3h12l4 4V6zm-5 7V2H2v15l4-4h11z');
        $doc->addChild($l0I1);
    }
}
