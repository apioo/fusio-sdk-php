<?php
/**
 * User_Account generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class User_Account implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?int $points = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
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
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'email' => $this->email, 'points' => $this->points, 'scopes' => $this->scopes, 'attributes' => $this->attributes, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
