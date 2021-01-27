<?php 
/**
 * Action_Index generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Action_Index implements \JsonSerializable
{
    /**
     * @var array<Action_Index_Entry>|null
     */
    protected $actions;
    /**
     * @param array<Action_Index_Entry>|null $actions
     */
    public function setActions(?array $actions) : void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<Action_Index_Entry>|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('actions' => $this->actions), static function ($value) : bool {
            return $value !== null;
        });
    }
}