<?php
/**
 * BackendConnectionConnection_idPath generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendConnectionConnection_idPath implements \JsonSerializable
{
    protected ?string $connection_id = null;
    public function setConnection_id(?string $connection_id) : void
    {
        $this->connection_id = $connection_id;
    }
    public function getConnection_id() : ?string
    {
        return $this->connection_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('connection_id' => $this->connection_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
