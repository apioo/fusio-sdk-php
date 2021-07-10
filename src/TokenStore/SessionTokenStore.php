<?php

namespace Fusio\Sdk\TokenStore;

use Fusio\Sdk\AccessToken;

/**
 * SessionTokenStore
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class SessionTokenStore implements TokenStoreInterface
{
    private string $sessionKey;

    public function __construct(string $sessionKey = 'fusio_access_token')
    {
        $this->sessionKey = $sessionKey;
    }

    public function get(): ?AccessToken
    {
        return $_SESSION[$this->sessionKey] ?? null;
    }

    public function persist(AccessToken $token): void
    {
        $_SESSION[$this->sessionKey] = $token;
    }
}
