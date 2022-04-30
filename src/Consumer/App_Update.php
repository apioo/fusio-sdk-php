<?php
/**
 * App_Update generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\MinLength;
use PSX\Schema\Attribute\Pattern;
use PSX\Schema\Attribute\Required;

#[Required(array('name', 'url', 'scopes'))]
class App_Update implements \JsonSerializable
{
    #[Pattern('^[A-z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
    #[MinLength(8)]
    protected ?string $url = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('name' => $this->name, 'url' => $this->url, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}
