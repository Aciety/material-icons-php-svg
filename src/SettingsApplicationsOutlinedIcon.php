<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['application', 'change', 'details', 'gear', 'info', 'information', 'options', 'personal', 'service', 'settings'],
)]
final class SettingsApplicationsOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6.21 13.97l1.2 2.07c.08.13.23.18.37.13l1.49-.6c.31.24.64.44 1.01.59l.22 1.59c.03.14.15.25.3.25h2.4c.15 0 .27-.11.3-.26l.22-1.59c.36-.15.7-.35 1.01-.59l1.49.6c.14.05.29 0 .37-.13l1.2-2.07c.08-.13.04-.29-.07-.39l-1.27-.99c.03-.19.04-.39.04-.58 0-.2-.02-.39-.04-.59l1.27-.99c.11-.09.15-.26.07-.39l-1.2-2.07c-.08-.13-.23-.18-.37-.13l-1.49.6c-.31-.24-.64-.44-1.01-.59l-.22-1.59c-.03-.14-.15-.25-.3-.25h-2.4c-.15 0-.27.11-.3.26l-.22 1.59c-.36.15-.71.34-1.01.58l-1.49-.6c-.14-.05-.29 0-.37.13l-1.2 2.07c-.08.13-.04.29.07.39l1.27.99c-.03.2-.05.39-.05.59 0 .2.02.39.04.59l-1.27.99c-.11.1-.14.26-.06.39zM12 10.29c.94 0 1.71.77 1.71 1.71s-.77 1.71-1.71 1.71-1.71-.77-1.71-1.71.77-1.71 1.71-1.71zM19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm0 16H5V5h14v14z');
        $doc->addChild($l0I1);
    }
}
