<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['T', 'add', 'alphabet', 'character', 'field', 'fields', 'font', 'input', 'letter', 'symbol', 'text', 'type'],
)]
final class TextFieldsTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.5 12h3v7h3v-7h3V9h-9zm3-8h-13v3h5v12h3V7h5z');
        $doc->addChild($l0I1);
    }
}
