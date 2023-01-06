<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['add', 'approve', 'check', 'collection', 'complete', 'done', 'layers', 'library', 'mark', 'multiple', 'music', 'ok', 'select', 'stacked', 'tick', 'validate', 'verified', 'video', 'yes'],
)]
final class LibraryAddCheckRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M11.76,13.28L9.69,11.2 c-0.38-0.39-0.38-1.01,0-1.4l0,0c0.39-0.39,1.02-0.39,1.41,0l1.36,1.37l4.42-4.46c0.39-0.39,1.02-0.39,1.41,0l0,0 c0.38,0.39,0.38,1.01,0,1.4l-5.13,5.17C12.79,13.68,12.15,13.68,11.76,13.28z M3,6L3,6C2.45,6,2,6.45,2,7v13c0,1.1,0.9,2,2,2h13 c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5c-0.55,0-1-0.45-1-1V7C4,6.45,3.55,6,3,6z');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
    }
}
