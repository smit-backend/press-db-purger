<?php

declare(strict_types=1);

namespace SmitBackend\Pressdbpurger\Contracts;

/**
 * Interface RevisionCleanerInterface
 *
 * @package SmitBackend\Pressdbpurger
 */
interface RevisionCleanerInterface
{
    public function execute(array $payload = []): mixed;
}
