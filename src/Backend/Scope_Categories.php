<?php
/**
 * Scope_Categories generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Scope_Categories implements \JsonSerializable
{
    /**
     * @var array<Scope_Category>|null
     */
    protected ?array $categories = null;
    /**
     * @param array<Scope_Category>|null $categories
     */
    public function setCategories(?array $categories) : void
    {
        $this->categories = $categories;
    }
    public function getCategories() : ?array
    {
        return $this->categories;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('categories' => $this->categories), static function ($value) : bool {
            return $value !== null;
        });
    }
}
