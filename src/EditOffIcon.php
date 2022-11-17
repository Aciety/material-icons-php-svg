<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Texts\SVGTitle;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['compose', 'create', 'disabled', 'draft', 'edit', 'editing', 'enabled', 'input', 'new', 'off', 'offline', 'on', 'pen', 'pencil', 'slash', 'write', 'writing'],
)]
final class EditOffIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGTitle(text: 'ic_edit_off_24px');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M0 0h24v24H0zm0 0h24v24H0z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12.126 8.125l1.937-1.937 3.747 3.747-1.937 1.938zM20.71 5.63l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75L20.71 7a1 1 0 0 0 0-1.37zM2 5l6.63 6.63L3 17.25V21h3.75l5.63-5.62L18 21l2-2L4 3 2 5z');
        $doc->addChild($l0I2);
    }
}
