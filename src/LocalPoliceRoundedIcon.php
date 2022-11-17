<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['911', 'badge', 'law', 'local', 'officer', 'police', 'protect', 'protection', 'security', 'shield'],
)]
final class LocalPoliceRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14.5,12.59l0.63,2.73c0.1,0.43-0.37,0.77-0.75,0.54L12,14.42l-2.39,1.44c-0.38,0.23-0.85-0.11-0.75-0.54L9.5,12.6 l-2.1-1.81C7.06,10.5,7.24,9.95,7.68,9.91l2.78-0.24l1.08-2.56c0.17-0.41,0.75-0.41,0.92,0l1.08,2.55l2.78,0.24 c0.44,0.04,0.62,0.59,0.28,0.88L14.5,12.59z M4.19,4.47C3.47,4.79,3,5.51,3,6.3V11c0,5.55,3.84,10.74,9,12c5.16-1.26,9-6.45,9-12 V6.3c0-0.79-0.47-1.51-1.19-1.83l-7-3.11c-0.52-0.23-1.11-0.23-1.62,0L4.19,4.47z');
        $doc->addChild($l0I1);
    }
}
