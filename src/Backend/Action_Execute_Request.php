<?php
/**
 * Action_Execute_Request automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;
use PSX\Schema\Attribute\Required;

#[Required(array('method'))]
class Action_Execute_Request implements \JsonSerializable
{
    #[Pattern('GET|POST|PUT|PATCH|DELETE')]
    protected ?string $method = null;
    protected ?string $uriFragments = null;
    protected ?string $parameters = null;
    protected ?string $headers = null;
    protected ?Action_Execute_Request_Body $body = null;
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setUriFragments(?string $uriFragments) : void
    {
        $this->uriFragments = $uriFragments;
    }
    public function getUriFragments() : ?string
    {
        return $this->uriFragments;
    }
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setHeaders(?string $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?string
    {
        return $this->headers;
    }
    public function setBody(?Action_Execute_Request_Body $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?Action_Execute_Request_Body
    {
        return $this->body;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('method' => $this->method, 'uriFragments' => $this->uriFragments, 'parameters' => $this->parameters, 'headers' => $this->headers, 'body' => $this->body), static function ($value) : bool {
            return $value !== null;
        });
    }
}
