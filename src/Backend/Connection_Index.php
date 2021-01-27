<?php 
/**
 * Connection_Index generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Connection_Index implements \JsonSerializable
{
    /**
     * @var array<Connection_Index_Entry>|null
     */
    protected $connections;
    /**
     * @param array<Connection_Index_Entry>|null $connections
     */
    public function setConnections(?array $connections) : void
    {
        $this->connections = $connections;
    }
    /**
     * @return array<Connection_Index_Entry>|null
     */
    public function getConnections() : ?array
    {
        return $this->connections;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('connections' => $this->connections), static function ($value) : bool {
            return $value !== null;
        });
    }
}