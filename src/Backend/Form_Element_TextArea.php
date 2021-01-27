<?php 
/**
 * Form_Element_TextArea generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Form_Element_TextArea extends Form_Element implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $mode;
    /**
     * @param string|null $mode
     */
    public function setMode(?string $mode) : void
    {
        $this->mode = $mode;
    }
    /**
     * @return string|null
     */
    public function getMode() : ?string
    {
        return $this->mode;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('mode' => $this->mode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}