<?php
/**
 * ConsumerTransactionPrepareProviderPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

class ConsumerTransactionPrepareProviderPath implements \JsonSerializable
{
    protected ?string $provider = null;
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('provider' => $this->provider), static function ($value) : bool {
            return $value !== null;
        });
    }
}
