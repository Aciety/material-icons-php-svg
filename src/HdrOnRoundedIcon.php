<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['add', 'alphabet', 'character', 'dynamic', 'enhance', 'font', 'hdr', 'high', 'letter', 'on', 'plus', 'range', 'select', 'symbol', 'text', 'type'],
)]
final class HdrOnRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7.25 9c-.41 0-.75.34-.75.75V11h-2V9.75c0-.41-.34-.75-.75-.75S3 9.34 3 9.75v4.5c0 .41.34.75.75.75s.75-.34.75-.75V12.5h2v1.75c0 .41.34.75.75.75s.75-.34.75-.75v-4.5C8 9.34 7.66 9 7.25 9zM21 11.5v-1c0-.83-.67-1.5-1.5-1.5H17c-.55 0-1 .45-1 1v4.25c0 .41.34.75.75.75s.75-.34.75-.75V13h1.1l.72 1.59c.11.25.36.41.63.41.5 0 .83-.51.64-.96l-.49-1.14c.5-.3.9-.8.9-1.4zm-3.5 0v-1h2v1h-2zM13 9h-3c-.28 0-.5.22-.5.5v5c0 .28.22.5.5.5h3c.82 0 1.5-.68 1.5-1.5v-3c0-.82-.68-1.5-1.5-1.5zm0 4.5h-2v-3h2v3z');
        $doc->addChild($l0I1);
    }
}
