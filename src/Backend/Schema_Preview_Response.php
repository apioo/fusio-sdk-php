<?php 
/**
 * Schema_Preview_Response generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Schema_Preview_Response implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $preview;
    /**
     * @param string|null $preview
     */
    public function setPreview(?string $preview) : void
    {
        $this->preview = $preview;
    }
    /**
     * @return string|null
     */
    public function getPreview() : ?string
    {
        return $this->preview;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('preview' => $this->preview), static function ($value) : bool {
            return $value !== null;
        });
    }
}