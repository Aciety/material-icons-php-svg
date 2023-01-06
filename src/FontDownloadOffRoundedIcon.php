<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['content'],
    tags: ['alphabet', 'character', 'disabled', 'download', 'enabled', 'font', 'letter', 'off', 'on', 'slash', 'square', 'symbol', 'text', 'type'],
)]
final class FontDownloadOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.58,9.75l-0.87-0.87l0.23-0.66h0.1L12.58,9.75z M10.35,7.52L10.55,7c0.23-0.6,0.8-1,1.45-1s1.22,0.4,1.45,1l2.17,5.79 L22,19.17V4c0-1.1-0.9-2-2-2H4.83L10.35,7.52z M21.19,22.61L21.19,22.61c-0.39,0.39-1.02,0.39-1.41,0L19.17,22H4c-1.1,0-2-0.9-2-2 V4.83L1.39,4.22C1,3.83,1,3.2,1.39,2.81l0,0c0.39-0.39,1.02-0.39,1.41,0l18.38,18.38C21.58,21.58,21.58,22.22,21.19,22.61z M12.1,14.93l-3.3-3.3L6.9,16.7C6.67,17.33,7.13,18,7.8,18h0.01c0.41,0,0.77-0.26,0.9-0.64l0.86-2.43H12.1z');
        $doc->addChild($l0I1);
    }
}
