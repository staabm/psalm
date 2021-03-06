<?php
namespace Psalm\Type\Atomic;

class TNumeric extends Scalar
{
    public function __toString(): string
    {
        return 'numeric';
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'numeric';
    }

    /**
     * @param  array<string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $php_major_version,
        int $php_minor_version
    ): ?string {
        return null;
    }

    public function canBeFullyExpressedInPhp(): bool
    {
        return false;
    }
}
