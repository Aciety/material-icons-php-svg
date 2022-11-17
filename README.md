# Material Icons in PHP as SVG objects

## Installation

```
composer require aciety/material-icons
```

## Usage

```php
<?php

use Aciety\Component\MaterialIcons\AbcIcon;

require __DIR__.'/vendor/autoload.php';

header('Content-Type: image/svg+xml');

$abcIcon = new AbcIcon();

echo $abcIcon->toXMLString(standalone: false);

// Will output to the browser:
// <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
//   <g>
//     <rect width="24" height="24" style="fill: none" />
//   </g>
//   <g>
//     <path d="M21,11h-1.5v-0.5h-2v3h2V13H21v1c0,0.55-0.45,1-1,1h-3c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V11z M8,10v5H6.5v-1.5h-2V15H3v-5c0-0.55,0.45-1,1-1h3C7.55,9,8,9.45,8,10z M6.5,10.5h-2V12h2V10.5z M13.5,12c0.55,0,1,0.45,1,1v1 c0,0.55-0.45,1-1,1h-4V9h4c0.55,0,1,0.45,1,1v1C14.5,11.55,14.05,12,13.5,12z M11,10.5v0.75h2V10.5H11z M13,12.75h-2v0.75h2V12.75z" />
//   </g>
// </svg>
```

## Removing unneeded icons

Add this config to your composer.json: (it accepts globs, strings or regexes)

```
    "scripts": {
        "pre-autoload-dump": [
            "Aciety\\Component\\MaterialIcons\\Tool\\Composer::cleanup"
        ]
    },
    "extra": {
        "aciety/material-icons": {
            "exclude": [
                "AbcIcon.php",
                 "*TwoToneIcon*",
                 "/SharpIcon\.php$/"
            ]
        }
    }
```
