<?php
/**
 * Route_Provider_Changelog generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Route_Provider_Changelog implements \JsonSerializable
{
    /**
     * @var array<Schema>|null
     */
    protected ?array $schemas = null;
    /**
     * @var array<Action>|null
     */
    protected ?array $actions = null;
    /**
     * @var array<Route>|null
     */
    protected ?array $routes = null;
    /**
     * @param array<Schema>|null $schemas
     */
    public function setSchemas(?array $schemas) : void
    {
        $this->schemas = $schemas;
    }
    public function getSchemas() : ?array
    {
        return $this->schemas;
    }
    /**
     * @param array<Action>|null $actions
     */
    public function setActions(?array $actions) : void
    {
        $this->actions = $actions;
    }
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param array<Route>|null $routes
     */
    public function setRoutes(?array $routes) : void
    {
        $this->routes = $routes;
    }
    public function getRoutes() : ?array
    {
        return $this->routes;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('schemas' => $this->schemas, 'actions' => $this->actions, 'routes' => $this->routes), static function ($value) : bool {
            return $value !== null;
        });
    }
}
