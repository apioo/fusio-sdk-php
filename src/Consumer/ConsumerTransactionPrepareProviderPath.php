<?php 
/**
 * ConsumerTransactionPrepareProviderPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class ConsumerTransactionPrepareProviderPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $provider;
    /**
     * @param string|null $provider
     */
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return string|null
     */
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('provider' => $this->provider), static function ($value) : bool {
            return $value !== null;
        });
    }
}