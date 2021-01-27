<?php 
/**
 * BackendScopeScope_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendScopeScope_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $scope_id;
    /**
     * @param string|null $scope_id
     */
    public function setScope_id(?string $scope_id) : void
    {
        $this->scope_id = $scope_id;
    }
    /**
     * @return string|null
     */
    public function getScope_id() : ?string
    {
        return $this->scope_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('scope_id' => $this->scope_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}