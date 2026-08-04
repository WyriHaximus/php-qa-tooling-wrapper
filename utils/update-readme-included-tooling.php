<?php declare(strict_types=1);

$root = dirname(__DIR__);
$composerFile = $root . '/composer.json';
$readmeFile = $root . '/README.md';

if (!is_file($composerFile)) {
    fwrite(STDERR, "composer.json not found at {$composerFile}\n");

    exit(1);
}

if (!is_file($readmeFile)) {
    fwrite(STDERR, "README.md not found at {$readmeFile}\n");

    exit(1);
}

/** @var array<string, mixed> $composer */
$composer = json_decode((string) file_get_contents($composerFile), true, 512, JSON_THROW_ON_ERROR);

/** @var array<string, string> $require */
$require = $composer['require'] ?? [];

$packages = array_keys(array_filter(
    $require,
    static fn (string $package): bool => $package !== 'php',
    ARRAY_FILTER_USE_KEY,
));

sort($packages, SORT_STRING);

$list = implode(
    "\n",
    array_map(
        static fn (string $package): string => sprintf(
            '* [`%s`](https://packagist.org/packages/%s)',
            $package,
            $package,
        ),
        $packages,
    ),
);

$readme = (string) file_get_contents($readmeFile);

$pattern = '/(<!-- included-tooling:start -->\r?\n)(.*?)(\r?\n<!-- included-tooling:end -->)/s';
$newReadme = preg_replace($pattern, '$1' . $list . '$3', $readme, 1, $count);

if ($count !== 1 || !is_string($newReadme)) {
    fwrite(STDERR, "Failed to update the Included tooling section in README.md\n");

    exit(1);
}

if ($newReadme === $readme) {
    exit(0);
}

file_put_contents($readmeFile, $newReadme);
