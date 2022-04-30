<?php
/**
 * Route generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Route implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $priority = null;
    protected ?string $path = null;
    protected ?string $controller = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<Route_Version>|null
     */
    protected ?array $config = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPriority(?int $priority) : void
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setController(?string $controller) : void
    {
        $this->controller = $controller;
    }
    public function getController() : ?string
    {
        return $this->controller;
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
    /**
     * @param array<Route_Version>|null $config
     */
    public function setConfig(?array $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?array
    {
        return $this->config;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'priority' => $this->priority, 'path' => $this->path, 'controller' => $this->controller, 'scopes' => $this->scopes, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}
