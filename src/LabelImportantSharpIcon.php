<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['favorite', 'important', 'indent', 'label', 'library', 'mail', 'remember', 'save', 'stamp', 'sticker', 'tag', 'wing'],
)]
final class LabelImportantSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 18.99h12.04L21 12l-4.97-7H4l5 7-5 6.99z');
        $doc->addChild($l0I1);
    }
}
