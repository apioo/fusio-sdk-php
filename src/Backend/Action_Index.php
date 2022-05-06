<?php
/**
 * Action_Index generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Action_Index implements \JsonSerializable
{
    /**
     * @var array<Action_Index_Entry>|null
     */
    protected ?array $actions = null;
    /**
     * @param array<Action_Index_Entry>|null $actions
     */
    public function setActions(?array $actions) : void
    {
        $this->actions = $actions;
    }
    public function getActions() : ?array
    {
        return $this->actions;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('actions' => $this->actions), static function ($value) : bool {
            return $value !== null;
        });
    }
}
