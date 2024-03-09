<?php
/**
 * BackendActionExecuteRequest automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Pattern;
use PSX\Schema\Attribute\Required;

#[Required(array('method'))]
class BackendActionExecuteRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Pattern('GET|POST|PUT|PATCH|DELETE')]
    protected ?string $method = null;
    protected ?string $uriFragments = null;
    protected ?string $parameters = null;
    protected ?string $headers = null;
    protected ?BackendActionExecuteRequestBody $body = null;
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
    public function setBody(?BackendActionExecuteRequestBody $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?BackendActionExecuteRequestBody
    {
        return $this->body;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('method', $this->method);
        $record->put('uriFragments', $this->uriFragments);
        $record->put('parameters', $this->parameters);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
