<?php 
/**
 * BackendCategoryCategory_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendCategoryCategory_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $category_id;
    /**
     * @param string|null $category_id
     */
    public function setCategory_id(?string $category_id) : void
    {
        $this->category_id = $category_id;
    }
    /**
     * @return string|null
     */
    public function getCategory_id() : ?string
    {
        return $this->category_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('category_id' => $this->category_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}