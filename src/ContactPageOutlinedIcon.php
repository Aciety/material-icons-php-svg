<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['account', 'avatar', 'contact', 'data', 'doc', 'document', 'drive', 'face', 'file', 'folder', 'folders', 'human', 'page', 'people', 'person', 'profile', 'sheet', 'slide', 'storage', 'user', 'writing'],
)]
final class ContactPageOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13.17,4L18,8.83V20H6V4H13.17 M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2L14,2z M12,14 c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C10,13.1,10.9,14,12,14z M16,17.43c0-0.81-0.48-1.53-1.22-1.85 C13.93,15.21,12.99,15,12,15c-0.99,0-1.93,0.21-2.78,0.58C8.48,15.9,8,16.62,8,17.43V18h8V17.43z');
        $doc->addChild($l0I1);
    }
}
