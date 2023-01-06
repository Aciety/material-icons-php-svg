<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['around', 'inprogress', 'load', 'loading refresh', 'lock', 'locked', 'password', 'privacy', 'private', 'protection', 'renew', 'rotate', 'safety', 'secure', 'security', 'turn'],
)]
final class LockResetRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13.26,3C8.17,2.86,4,6.94,4,12H2.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.79c0.2,0.2,0.51,0.2,0.71,0l2.8-2.79 C8.46,12.54,8.24,12,7.79,12H6c0-3.89,3.2-7.06,7.1-7c3.71,0.05,6.84,3.18,6.9,6.9c0.06,3.91-3.1,7.1-7,7.1 c-1.59,0-3.05-0.53-4.23-1.43c-0.4-0.3-0.96-0.27-1.31,0.09l0,0c-0.43,0.43-0.39,1.14,0.09,1.5C9.06,20.31,10.95,21,13,21 c5.06,0,9.14-4.17,9-9.25C21.87,7.05,17.95,3.13,13.26,3z M15,11v-1c0-1.1-0.9-2-2-2s-2,0.9-2,2v1c-0.55,0-1,0.45-1,1v3 c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-3C16,11.45,15.55,11,15,11z M14,11h-2v-1c0-0.55,0.45-1,1-1s1,0.45,1,1V11z');
        $doc->addChild($l0I1);
    }
}
