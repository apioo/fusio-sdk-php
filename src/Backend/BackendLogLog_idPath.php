<?php 
/**
 * BackendLogLog_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendLogLog_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $log_id;
    /**
     * @param string|null $log_id
     */
    public function setLog_id(?string $log_id) : void
    {
        $this->log_id = $log_id;
    }
    /**
     * @return string|null
     */
    public function getLog_id() : ?string
    {
        return $this->log_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('log_id' => $this->log_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}