<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['favorite', 'indent', 'label', 'library', 'mail', 'remember', 'save', 'stamp', 'sticker', 'tag'],
)]
final class LabelSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17.03 5L3 5.01v13.98l14.03.01L22 12l-4.97-7z');
        $doc->addChild($l0I1);
    }
}
