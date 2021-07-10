<?php

namespace Fusio\Sdk\TokenStore;

use Fusio\Sdk\AccessToken;
use Psr\SimpleCache\CacheInterface;

/**
 * CacheTokenStore
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class CacheTokenStore implements TokenStoreInterface
{
    private CacheInterface $cache;
    private string $cacheKey;

    public function __construct(CacheInterface $cache, string $cacheKey = 'fusio_access_token')
    {
        $this->cache = $cache;
        $this->cacheKey = $cacheKey;
    }

    public function get(): ?AccessToken
    {
        return $this->cache->get($this->cacheKey) ?: null;
    }

    public function persist(AccessToken $token): void
    {
        $this->cache->set($this->cacheKey, $token);
    }
}
