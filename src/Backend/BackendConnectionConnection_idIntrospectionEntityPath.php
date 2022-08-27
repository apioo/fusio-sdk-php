<?php
/**
 * BackendConnectionConnection_idIntrospectionEntityPath automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendConnectionConnection_idIntrospectionEntityPath implements \JsonSerializable
{
    protected ?string $connection_id = null;
    protected ?string $entity = null;
    public function setConnection_id(?string $connection_id) : void
    {
        $this->connection_id = $connection_id;
    }
    public function getConnection_id() : ?string
    {
        return $this->connection_id;
    }
    public function setEntity(?string $entity) : void
    {
        $this->entity = $entity;
    }
    public function getEntity() : ?string
    {
        return $this->entity;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('connection_id' => $this->connection_id, 'entity' => $this->entity), static function ($value) : bool {
            return $value !== null;
        });
    }
}