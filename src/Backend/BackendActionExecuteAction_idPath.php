<?php 
/**
 * BackendActionExecuteAction_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendActionExecuteAction_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $action_id;
    /**
     * @param string|null $action_id
     */
    public function setAction_id(?string $action_id) : void
    {
        $this->action_id = $action_id;
    }
    /**
     * @return string|null
     */
    public function getAction_id() : ?string
    {
        return $this->action_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('action_id' => $this->action_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}