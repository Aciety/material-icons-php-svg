<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tests\Tool;

use Aciety\Component\MaterialIcons\Tool\MuiFilenameRewriter;
use PHPUnit\Framework\TestCase;
use SplFileInfo;

final class MuiFilenameRewriterTest extends TestCase
{
    private readonly MuiFilenameRewriter $rewriter;

    protected function setUp(): void
    {
        $this->rewriter = new MuiFilenameRewriter();
    }

    /**
     * @testWith ["3d_rotation_two_tone_24px.svg", "ThreeDRotationTwoToneIcon.php"]
     *           ["3p_rounded_24px.svg", "ThreePRoundedIcon.php"]
     *           ["30fps_select_sharp_24px.svg", "ThirtyFpsSelectSharpIcon.php"]
     *           ["60fps_select_sharp_24px.svg", "SixtyFpsSelectSharpIcon.php"]
     *           ["360_outlined_24px.svg", "ThreeSixtyOutlinedIcon.php"]
     *           ["2k_plus_two_tone_24px.svg", "TwoKPlusTwoToneIcon.php"]
     *           ["1k_24px.svg", "OneKIcon.php"]
     *           ["2k_outlined_24px.svg", "TwoKOutlinedIcon.php"]
     *           ["3k_24px.svg", "ThreeKIcon.php"]
     *           ["4k_rounded_24px.svg", "FourKRoundedIcon.php"]
     *           ["5k_two_tone_24px.svg", "FiveKTwoToneIcon.php"]
     *           ["6k_24px.svg", "SixKIcon.php"]
     *           ["7k_sharp_24px.svg", "SevenKSharpIcon.php"]
     *           ["8k_outlined_24px.svg", "EightKOutlinedIcon.php"]
     *           ["9k_plus_two_tone_24px.svg", "NineKPlusTwoToneIcon.php"]
     *           ["10k_sharp_24px.svg", "OneKkSharpIcon.php"]
     *           ["9mp_rounded_24px.svg", "NineMpRoundedIcon.php"]
     *           ["10mp_rounded_24px.svg", "TenMpRoundedIcon.php"]
     *           ["11mp_rounded_24px.svg", "ElevenMpRoundedIcon.php"]
     *           ["20mp_rounded_24px.svg", "TwentyZeroMpRoundedIcon.php"]
     *           ["21mp_rounded_24px.svg", "TwentyOneMpRoundedIcon.php"]
     *           ["1x_mobiledata_two_tone_24px.svg", "TimesOneMobiledataTwoToneIcon.php"]
     *           ["3g_mobiledata_rounded_24px.svg", "ThreeGMobiledataRoundedIcon.php"]
     *           ["4g_plus_mobiledata_two_tone_24px.svg", "FourGPlusMobiledataTwoToneIcon.php"]
     *           ["5g_24px.svg", "FiveGIcon.php"]
     *           ["18_up_rating_sharp_24px.svg", "EighteenUpRatingSharpIcon.php"]
     *           ["signal_wifi_statusbar_connected_no_internet_4_outlined_24px.svg", "SignalWifiStatusbarConnectedNoInternet4OutlinedIcon.php"]
     *           ["zoom_out_two_tone_24px.svg", "ZoomOutTwoToneIcon.php"]
     */
    public function testRename(string $filename, string $expectedFilename): void
    {
        self::assertSame($expectedFilename, $this->rewriter->rewrite(new SplFileInfo($filename)));
    }
}
