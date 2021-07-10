<?php

namespace Fusio\Sdk\TokenStore;

use Fusio\Sdk\AccessToken;

/**
 * MemoryTokenStore
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class MemoryTokenStore implements TokenStoreInterface
{
    private ?AccessToken $token = null;

    public function get(): ?AccessToken
    {
        return $this->token;
    }

    public function persist(AccessToken $token): void
    {
        $this->token = $token;
    }
}
