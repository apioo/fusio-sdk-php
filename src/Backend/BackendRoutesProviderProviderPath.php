<?php
/**
 * BackendRoutesProviderProviderPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendRoutesProviderProviderPath implements \JsonSerializable
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
