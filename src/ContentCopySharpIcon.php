<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['content', 'copy', 'cut', 'doc', 'document', 'duplicate', 'file', 'multiple', 'past'],
)]
final class ContentCopySharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16 1H2v16h2V3h12V1zm5 4H6v18h15V5zm-2 16H8V7h11v14z');
        $doc->addChild($l0I1);
    }
}
