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

enum Company: string implements CompanyInterface
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

    /**
     * Returns the name of the company
     *
     * @throws void
     */
    #[Override]
    public function getName(): string | null
    {
        return null;
    }

    /**
     * Returns the name of the company
     *
     * @throws void
     */
    #[Override]
    public function getBrandname(): string | null
    {
        return null;
    }

    /**
     * Returns the name of the company
     *
     * @throws void
     */
    #[Override]
    public function getKey(): string
    {
        return $this->name;
    }
}
