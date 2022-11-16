<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use SVG\SVG;

use function array_keys;
use function strcasecmp;
use function strtr;
use function uasort;

final class IconPhpTemplate
{
    /**
     * @var array<class-string, int>
     */
    private array $uses = [
        SVG::class => 1,
    ];

    /**
     * @var list<string>
     */
    private array $calls = [];

    /**
     * @param non-empty-string $iconName
     */
    public function __construct(
        private readonly string $iconName,
    ) {
    }

    /**
     * @param class-string $use
     */
    public function addUse(string $use): void
    {
        $this->uses[$use] = 1;
    }

    public function addCall(string $call): void
    {
        $this->calls[] = $call;
    }

    /**
     * @return non-empty-string
     */
    public function getOutput(): string
    {
        $sortedUses = array_keys($this->uses);
        uasort($sortedUses, static fn (string $a, string $b) => strcasecmp($a, $b));

        $uses = '';
        foreach ($sortedUses as $use) {
            $uses .= "use $use;\n";
        }

        $calls = '';
        foreach ($this->calls as $call) {
            $calls .= "\n        $call";
        }

        /** @var non-empty-string */
        return strtr('<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

USES
final class ICON extends SVG
{
    public function __construct()
    {
        parent::__construct();
CALLS
    }
}
', ['USES' => $uses, 'ICON' => $this->iconName, 'CALLS' => $calls]);
    }
}
