<?php
/**
 * BackendMarketplaceApp_namePath generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendMarketplaceApp_namePath implements \JsonSerializable
{
    protected ?string $app_name = null;
    public function setApp_name(?string $app_name) : void
    {
        $this->app_name = $app_name;
    }
    public function getApp_name() : ?string
    {
        return $this->app_name;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('app_name' => $this->app_name), static function ($value) : bool {
            return $value !== null;
        });
    }
}
