<?php

namespace Fusio\Sdk\TokenStore;

use Fusio\Sdk\AccessToken;

/**
 * FileTokenStore
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class FileTokenStore implements TokenStoreInterface
{
    private string $cacheDir;
    private string $fileName;

    public function __construct(?string $cacheDir = null, string $fileName = 'fusio_access_token')
    {
        $this->cacheDir = $cacheDir ?? sys_get_temp_dir();
        $this->fileName = $fileName;
    }

    public function get(): ?AccessToken
    {
        $file = $this->getFileName();
        if (is_file($file)) {
            return AccessToken::fromArray(json_decode(file_get_contents($file), true));
        } else {
            return null;
        }
    }

    public function persist(AccessToken $token): void
    {
        $file = $this->getFileName();
        file_put_contents($file, json_encode($token->toArray()));
    }

    private function getFileName(): string
    {
        return $this->cacheDir . '/' . $this->fileName . '.json';
    }
}
