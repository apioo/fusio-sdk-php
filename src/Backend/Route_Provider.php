<?php
/**
 * Route_Provider generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Route_Provider implements \JsonSerializable
{
    protected ?string $path = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?Route_Provider_Config $config = null;
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function setConfig(?Route_Provider_Config $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?Route_Provider_Config
    {
        return $this->config;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('path' => $this->path, 'scopes' => $this->scopes, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}
