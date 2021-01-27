<?php 
/**
 * Form_Element_Input generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Form_Element_Input extends Form_Element implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('type' => $this->type), static function ($value) : bool {
            return $value !== null;
        }));
    }
}