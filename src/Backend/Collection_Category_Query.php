<?php 
/**
 * Collection_Category_Query generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Collection_Category_Query extends Collection_Query implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $categoryId;
    /**
     * @param int|null $categoryId
     */
    public function setCategoryId(?int $categoryId) : void
    {
        $this->categoryId = $categoryId;
    }
    /**
     * @return int|null
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('categoryId' => $this->categoryId), static function ($value) : bool {
            return $value !== null;
        }));
    }
}