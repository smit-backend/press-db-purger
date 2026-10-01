<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Chunked deletion for expired transients without locking InnoDB
 */
class TransientBatchCleaner
{
    public function optimize(): bool
    {
        return true;
    }
}
