<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['account', 'calendar', 'contact', 'date', 'face', 'human', 'information', 'people', 'perm', 'person', 'profile', 'schedule', 'time', 'user'],
)]
final class PermContactCalendarOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.84 4.22c-.05-.12-.11-.23-.18-.34-.14-.21-.33-.4-.54-.54-.11-.07-.22-.13-.34-.18-.24-.1-.5-.16-.78-.16h-1V1h-2v2H8V1H6v2H5c-.42 0-.8.13-1.12.34-.21.14-.4.33-.54.54-.07.11-.13.22-.18.34-.1.24-.16.5-.16.78v14c0 1.1.89 2 2 2h14c.28 0 .54-.06.78-.16.12-.05.23-.11.34-.18.21-.14.4-.33.54-.54.21-.32.34-.71.34-1.12V5c0-.28-.06-.54-.16-.78zM5 19V5h14v14H5zm7-6.12c-2.03 0-6 1.08-6 3.58V18h12v-1.53c0-2.51-3.97-3.59-6-3.59zM8.31 16c.69-.56 2.38-1.12 3.69-1.12s3.01.56 3.69 1.12H8.31zM12 12c1.65 0 3-1.35 3-3s-1.35-3-3-3-3 1.35-3 3 1.35 3 3 3zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z');
        $doc->addChild($l0I1);
    }
}
