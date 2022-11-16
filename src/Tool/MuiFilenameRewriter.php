<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use SplFileInfo;

use function preg_match;
use function preg_replace;
use function str_replace;
use function str_starts_with;
use function substr;
use function ucwords;

final class MuiFilenameRewriter implements FilenameRewriter
{
    private const SINGLE_DIGIT_NUMBERS = [
        'Zero',
        'One',
        'Two',
        'Three',
        'Four',
        'Five',
        'Six',
        'Seven',
        'Eight',
        'Nine',
    ];
    private const TWO_DIGIT_NUMBERS1 = [
        'Ten',
        'Eleven',
        'Twelve',
        'Thirteen',
        'Fourteen',
        'Fifteen',
        'Sixteen',
        'Seventeen',
        'Eighteen',
        'Nineteen',
    ];

    public function rewrite(SplFileInfo $file): string
    {
        /** @var non-empty-string $fileName */
        $fileName = preg_replace('/_([0-9]+)px\.svg/', 'Icon.php', $file->getFilename());
        $fileName = str_replace(' ', '', ucwords(str_replace('_', ' ', $fileName)));

        if (str_starts_with($fileName, '123')) {
            return 'OneTwoThree'.substr($fileName, 3);
        }

        if (str_starts_with($fileName, '6F')) {
            return 'Six'.substr($fileName, 1);
        }

        if (str_starts_with($fileName, '3dRotation')) {
            return 'ThreeD'.substr($fileName, 2);
        }

        if (str_starts_with($fileName, '3p')) {
            return 'ThreeP'.substr($fileName, 2);
        }

        if (str_starts_with($fileName, '30fps')) {
            return 'ThirtyFps'.substr($fileName, 5);
        }
        if (str_starts_with($fileName, '60fps')) {
            return 'SixtyFps'.substr($fileName, 5);
        }
        if (str_starts_with($fileName, '360')) {
            return 'ThreeSixty'.substr($fileName, 3);
        }

        if (preg_match('/\dk/', $fileName) === 1) {
            return self::SINGLE_DIGIT_NUMBERS[$fileName[0]].'K'.substr($fileName, 2);
        }

        if (preg_match('/^\dmp/', $fileName) === 1) {
            return self::SINGLE_DIGIT_NUMBERS[$fileName[0]].'M'.substr($fileName, 2);
        }

        if (preg_match('/^1\dmp/', $fileName) === 1) {
            return self::TWO_DIGIT_NUMBERS1[$fileName[1]].'M'.substr($fileName, 3);
        }

        if (preg_match('/^2\dmp/', $fileName) === 1) {
            return 'Twenty'.self::SINGLE_DIGIT_NUMBERS[$fileName[1]].'M'.substr($fileName, 3);
        }

        if (str_starts_with($fileName, '1x')) {
            return 'TimesOne'.substr($fileName, 2);
        }
        if (str_starts_with($fileName, '3g')) {
            return 'ThreeG'.substr($fileName, 2);
        }
        if (str_starts_with($fileName, '4g')) {
            return 'FourG'.substr($fileName, 2);
        }
        if (str_starts_with($fileName, '5g')) {
            return 'FiveG'.substr($fileName, 2);
        }

        // All other names starting with a number between 10 and 19
        if (preg_match('/^1\d/', $fileName) === 1) {
            return self::TWO_DIGIT_NUMBERS1[$fileName[1]].substr($fileName, 2);
        }

        return $fileName;
    }
}
