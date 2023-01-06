<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['file'],
    tags: ['apply', 'approval', 'approvals', 'approve', 'certificate', 'certification', 'disapproval', 'drive', 'file', 'impression', 'ink', 'mark', 'postage', 'stamp'],
)]
final class ApprovalOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,16v6h16v-6c0-1.1-0.9-2-2-2H6C4.9,14,4,14.9,4,16z M18,18H6v-2h12V18z M12,2C9.24,2,7,4.24,7,7l5,7l5-7 C17,4.24,14.76,2,12,2z M12,11L9,7c0-1.66,1.34-3,3-3s3,1.34,3,3L12,11z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
