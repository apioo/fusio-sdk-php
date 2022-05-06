<?php
/**
 * User generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;

class User implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $roleId = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_\\.]{3,32}$')]
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?int $points = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<App>|null
     */
    protected ?array $apps = null;
    protected ?User_Attributes $attributes = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setRoleId(?int $roleId) : void
    {
        $this->roleId = $roleId;
    }
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
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
     * @param array<App>|null $apps
     */
    public function setApps(?array $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?array
    {
        return $this->apps;
    }
    public function setAttributes(?User_Attributes $attributes) : void
    {
        $this->attributes = $attributes;
    }
    public function getAttributes() : ?User_Attributes
    {
        return $this->attributes;
    }
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'roleId' => $this->roleId, 'status' => $this->status, 'name' => $this->name, 'email' => $this->email, 'points' => $this->points, 'scopes' => $this->scopes, 'apps' => $this->apps, 'attributes' => $this->attributes, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
