<?php
/**
 * BackendActionExecuteAction_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

class BackendActionExecuteAction_idPath implements \JsonSerializable
{
    protected ?string $action_id = null;
    public function setAction_id(?string $action_id) : void
    {
        $this->action_id = $action_id;
    }
    public function getAction_id() : ?string
    {
        return $this->action_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('action_id' => $this->action_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
