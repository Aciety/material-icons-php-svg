<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: missingType.generics
	'message' => '#^PHPDoc tag @var for variable \\$categoriesIterator contains generic class AppendIterator but does not specify its types\\: TKey, TValue, TIterator$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: missingType.generics
	'message' => '#^PHPDoc tag @var for variable \\$svgIconIterator contains generic class AppendIterator but does not specify its types\\: TKey, TValue, TIterator$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: missingType.generics
	'message' => '#^PHPDoc tag @var for variable \\$tagsIterator contains generic class AppendIterator but does not specify its types\\: TKey, TValue, TIterator$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$arrays of function array_merge expects array, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$iconName of method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:build\\(\\) expects non\\-empty\\-string, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#3 \\$categories of method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:build\\(\\) expects list\\<non\\-empty\\-string\\>, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#4 \\$tags of method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:build\\(\\) expects list\\<non\\-empty\\-string\\>, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/bin/build.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$patterns of method Symfony\\\\Component\\\\Finder\\\\Finder\\:\\:name\\(\\) expects array\\<string\\>\\|string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Tool/Composer.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:normalizePoints\\(\\) should return non\\-empty\\-string but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Tool/IconBuilder.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$points of static method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:normalizePoints\\(\\) expects list\\<array\\{float\\|int, float\\|int\\}\\>, array\\<array\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Tool/IconBuilder.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertTrue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/ComposerTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNotNull\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Tool/IconBuilderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertStringEqualsFile\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/IconBuilderTest.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$iconName of method Aciety\\\\Component\\\\MaterialIcons\\\\Tool\\\\IconBuilder\\:\\:build\\(\\) expects non\\-empty\\-string, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/IconBuilderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertFileExists\\(\\)\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Tool/IconDownloaderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertJsonFileEqualsJsonFile\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Tool/IconDownloaderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNotEmpty\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/IconDownloaderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertXmlFileEqualsXmlFile\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/IconDownloaderTest.php',
];
$ignoreErrors[] = [
	// identifier: staticMethod.dynamicCall
	'message' => '#^Dynamic call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertSame\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Tool/MuiFilenameRewriterTest.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
