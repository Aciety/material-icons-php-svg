<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['alphabet', 'character', 'fiber', 'font', 'letter', 'network', 'new', 'symbol', 'text', 'type'],
)]
final class FiberNewRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zM8.5 14.21c0 .43-.36.79-.79.79-.25 0-.49-.12-.64-.33L4.75 11.5v2.88c0 .35-.28.62-.62.62s-.63-.28-.63-.62V9.79c0-.43.36-.79.79-.79h.05c.26 0 .5.12.65.33l2.26 3.17V9.62c0-.34.28-.62.63-.62s.62.28.62.62v4.59zm5-4.57c0 .35-.28.62-.62.62H11v1.12h1.88c.35 0 .62.28.62.62v.01c0 .35-.28.62-.62.62H11v1.11h1.88c.35 0 .62.28.62.62 0 .35-.28.62-.62.62h-2.53c-.47 0-.85-.38-.85-.85v-4.3c0-.45.38-.83.85-.83h2.53c.35 0 .62.28.62.62v.02zm7 4.36c0 .55-.45 1-1 1h-4c-.55 0-1-.45-1-1V9.62c0-.34.28-.62.62-.62s.62.28.62.62v3.89h1.13v-2.9c0-.35.28-.62.62-.62s.62.28.62.62v2.89h1.12V9.62c0-.35.28-.62.62-.62s.62.28.62.62V14z');
        $doc->addChild($l0I0);
    }
}
