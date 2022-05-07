<?php
/**
 * BackendLogLog_idPath generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendLogLog_idPath implements \JsonSerializable
{
    protected ?string $log_id = null;
    public function setLog_id(?string $log_id) : void
    {
        $this->log_id = $log_id;
    }
    public function getLog_id() : ?string
    {
        return $this->log_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('log_id' => $this->log_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
