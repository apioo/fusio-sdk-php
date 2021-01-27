<?php 
/**
 * BackendLogErrorError_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendLogErrorError_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $error_id;
    /**
     * @param string|null $error_id
     */
    public function setError_id(?string $error_id) : void
    {
        $this->error_id = $error_id;
    }
    /**
     * @return string|null
     */
    public function getError_id() : ?string
    {
        return $this->error_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('error_id' => $this->error_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}