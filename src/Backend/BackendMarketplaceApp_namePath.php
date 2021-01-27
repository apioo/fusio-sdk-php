<?php 
/**
 * BackendMarketplaceApp_namePath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendMarketplaceApp_namePath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $app_name;
    /**
     * @param string|null $app_name
     */
    public function setApp_name(?string $app_name) : void
    {
        $this->app_name = $app_name;
    }
    /**
     * @return string|null
     */
    public function getApp_name() : ?string
    {
        return $this->app_name;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('app_name' => $this->app_name), static function ($value) : bool {
            return $value !== null;
        });
    }
}