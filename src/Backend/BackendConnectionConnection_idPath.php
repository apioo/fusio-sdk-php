<?php 
/**
 * BackendConnectionConnection_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendConnectionConnection_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $connection_id;
    /**
     * @param string|null $connection_id
     */
    public function setConnection_id(?string $connection_id) : void
    {
        $this->connection_id = $connection_id;
    }
    /**
     * @return string|null
     */
    public function getConnection_id() : ?string
    {
        return $this->connection_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('connection_id' => $this->connection_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}