<?php
/**
 * BackendActionExecuteResponse automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendActionExecuteResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $statusCode = null;
    protected ?BackendActionExecuteResponseHeaders $headers = null;
    protected ?BackendActionExecuteResponseBody $body = null;
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?BackendActionExecuteResponseHeaders $headers): void
    {
        $this->headers = $headers;
    }
    public function getHeaders(): ?BackendActionExecuteResponseHeaders
    {
        return $this->headers;
    }
    public function setBody(?BackendActionExecuteResponseBody $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?BackendActionExecuteResponseBody
    {
        return $this->body;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('statusCode', $this->statusCode);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
