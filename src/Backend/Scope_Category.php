<?php 
/**
 * Scope_Category generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Scope_Category implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var array<Scope_Category_Scope>|null
     */
    protected $scopes;
    /**
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
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
    /**
     * @return array<Scope_Category_Scope>|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}