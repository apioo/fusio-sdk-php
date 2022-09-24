<?php
/**
 * BackendAppTokenTokenIdPath automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Key;

class BackendAppTokenTokenIdPath implements \JsonSerializable
{
    #[Key('token_id')]
    protected ?string $tokenId = null;
    public function setTokenId(?string $tokenId) : void
    {
        $this->tokenId = $tokenId;
    }
    public function getTokenId() : ?string
    {
        return $this->tokenId;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('token_id' => $this->tokenId), static function ($value) : bool {
            return $value !== null;
        });
    }
}
