<?php

/**
 * This file is part of the mimmi20/ua-data-interface package.
 *
 * Copyright (c) 2025-2026, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaData;

use Override;

enum Os: string implements OsInterface
{
    case unknown = 'unknown';

    /**
     * @throws void
     *
     * @api
     * @phpcsSuppress SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
     */
    public static function fromName(string $name): self
    {
        return self::unknown;
    }

    /** @throws void */
    #[Override]
    public function getName(): string | null
    {
        return null;
    }

    /** @throws void */
    #[Override]
    public function getMarketingName(): string | null
    {
        return null;
    }

    /** @throws void */
    #[Override]
    public function getManufacturer(): CompanyInterface
    {
        return Company::unknown;
    }

    /**
     * @return array{factory: class-string|null, search: array<int, string>|null, value?: float|int|string}
     *
     * @throws void
     */
    #[Override]
    public function getVersion(): array
    {
        return ['factory' => null, 'search' => null];
    }

    /** @throws void */
    #[Override]
    public function getKey(): string
    {
        return $this->name;
    }
}
