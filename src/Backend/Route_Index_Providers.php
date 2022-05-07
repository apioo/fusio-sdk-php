<?php
/**
 * Route_Index_Providers generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Route_Index_Providers implements \JsonSerializable
{
    /**
     * @var array<Route_Provider>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<Route_Provider>|null $providers
     */
    public function setProviders(?array $providers) : void
    {
        $this->providers = $providers;
    }
    public function getProviders() : ?array
    {
        return $this->providers;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('providers' => $this->providers), static function ($value) : bool {
            return $value !== null;
        });
    }
}
