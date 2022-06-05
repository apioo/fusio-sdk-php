<?php
/**
 * BackendLogErrorError_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendLogErrorError_idPath implements \JsonSerializable
{
    protected ?string $error_id = null;
    public function setError_id(?string $error_id) : void
    {
        $this->error_id = $error_id;
    }
    public function getError_id() : ?string
    {
        return $this->error_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('error_id' => $this->error_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
