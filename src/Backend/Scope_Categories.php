<?php 
/**
 * Scope_Categories generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Scope_Categories implements \JsonSerializable
{
    /**
     * @var array<Scope_Category>|null
     */
    protected $categories;
    /**
     * @param array<Scope_Category>|null $categories
     */
    public function setCategories(?array $categories) : void
    {
        $this->categories = $categories;
    }
    /**
     * @return array<Scope_Category>|null
     */
    public function getCategories() : ?array
    {
        return $this->categories;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('categories' => $this->categories), static function ($value) : bool {
            return $value !== null;
        });
    }
}