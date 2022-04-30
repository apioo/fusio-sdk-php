<?php
/**
 * BackendCategoryCategory_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendCategoryCategory_idPath implements \JsonSerializable
{
    protected ?string $category_id = null;
    public function setCategory_id(?string $category_id) : void
    {
        $this->category_id = $category_id;
    }
    public function getCategory_id() : ?string
    {
        return $this->category_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('category_id' => $this->category_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
