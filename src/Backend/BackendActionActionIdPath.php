<?php
/**
 * BackendActionActionIdPath automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Key;

class BackendActionActionIdPath implements \JsonSerializable
{
    #[Key('action_id')]
    protected ?string $actionId = null;
    public function setActionId(?string $actionId) : void
    {
        $this->actionId = $actionId;
    }
    public function getActionId() : ?string
    {
        return $this->actionId;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('action_id' => $this->actionId), static function ($value) : bool {
            return $value !== null;
        });
    }
}
