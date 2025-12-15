<?php

/**
 * This file is part of the browser-detector package.
 *
 * Copyright (c) 2012-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaData;

interface EngineInterface
{
    /** @throws void */
    public function getName(): string | null;

    /** @throws void */
    public function getManufacturer(): CompanyInterface;

    /**
     * @return array{factory: class-string|null, search: array<int, string>|null, value?: float|int|string}
     *
     * @throws void
     */
    public function getVersion(): array;

    /** @throws void */
    public function getKey(): string;
}
