<?php

namespace Fusio\Sdk\TokenStore;

use Fusio\Sdk\AccessToken;

/**
 * TokenStoreInterface
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
interface TokenStoreInterface
{
    /**
     * @return AccessToken|null
     */
    public function get(): ?AccessToken;

    /**
     * @param AccessToken $token
     */
    public function persist(AccessToken $token): void;
}
