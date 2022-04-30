<?php
/**
 * Scope_Category generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Scope_Category implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $name = null;
    /**
     * @var array<Scope_Category_Scope>|null
     */
    protected ?array $scopes = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param array<Scope_Category_Scope>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}
