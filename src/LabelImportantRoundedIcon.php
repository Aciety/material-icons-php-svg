<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['favorite', 'important', 'indent', 'label', 'library', 'mail', 'remember', 'save', 'stamp', 'sticker', 'tag', 'wing'],
)]
final class LabelImportantRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5.94 18.99H15c.65 0 1.26-.31 1.63-.84l3.95-5.57c.25-.35.25-.81 0-1.16l-3.96-5.58C16.26 5.31 15.65 5 15 5H5.94c-.81 0-1.28.93-.81 1.59L9 12l-3.87 5.41c-.47.66 0 1.58.81 1.58z');
        $doc->addChild($l0I1);
    }
}
