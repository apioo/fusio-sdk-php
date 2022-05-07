<?php
/**
 * Category generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;

class Category implements \JsonSerializable
{
    protected ?int $id = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name), static function ($value) : bool {
            return $value !== null;
        });
    }
}
