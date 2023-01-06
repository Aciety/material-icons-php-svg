<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['aperture', 'camera', 'duration', 'image', 'lens', 'photo', 'photography', 'photos', 'picture', 'setting', 'shutter', 'speed', 'stop', 'time', 'timer', 'watch'],
)]
final class ShutterSpeedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 3h4c.55 0 1-.45 1-1s-.45-1-1-1h-4c-.55 0-1 .45-1 1s.45 1 1 1zm9.03 4.39l.75-.75c.38-.38.39-1.01 0-1.4l-.01-.01c-.39-.39-1.01-.38-1.4 0l-.75.75C16.07 4.74 14.12 4 12 4c-4.8 0-8.88 3.96-9 8.76C2.87 17.84 6.94 22 12 22c4.98 0 9-4.03 9-9 0-2.12-.74-4.07-1.97-5.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-1.19-5h-3.7c-.38 0-.62.4-.45.74.56 1.12 1.44 2.01 2.57 2.57.23.11.52.02.65-.21l1.37-2.35c.19-.33-.05-.75-.44-.75zm3.92-7.35c-.23-.12-.52-.02-.65.2l-1.38 2.39c-.2.34.04.76.43.76h3.76c.38 0 .62-.4.45-.73-.58-1.13-1.49-2.04-2.61-2.62zm-.85 7.05c-.19-.34-.68-.35-.87-.01l-2.04 3.52c-.18.32.02.72.39.75 1.34.14 2.69-.18 3.83-.89.22-.14.28-.43.16-.66l-1.47-2.71zm-3.57-1.47L7.93 9.57c-.2-.3-.64-.3-.84 0-.81 1.16-1.17 2.57-1.05 3.98.02.26.24.45.5.45h3.35c.39 0 .63-.44.42-.77zm3.66-.49l2.02 3.74c.18.33.64.35.86.05.86-1.18 1.24-2.62 1.12-4.08-.02-.26-.25-.45-.5-.45h-3.05c-.39 0-.63.4-.45.74zm-3.8-1.57c.2.31.66.3.85-.02l1.94-3.35c.19-.32-.03-.72-.4-.76-1.36-.12-2.73.21-3.88.97-.22.15-.27.46-.13.68l1.62 2.48z');
        $doc->addChild($l0I1);
    }
}
