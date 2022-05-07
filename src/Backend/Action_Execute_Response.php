<?php
/**
 * Action_Execute_Response generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Action_Execute_Response implements \JsonSerializable
{
    protected ?int $statusCode = null;
    protected ?Action_Execute_Response_Headers $headers = null;
    protected ?Action_Execute_Response_Body $body = null;
    public function setStatusCode(?int $statusCode) : void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?Action_Execute_Response_Headers $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?Action_Execute_Response_Headers
    {
        return $this->headers;
    }
    public function setBody(?Action_Execute_Response_Body $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?Action_Execute_Response_Body
    {
        return $this->body;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('statusCode' => $this->statusCode, 'headers' => $this->headers, 'body' => $this->body), static function ($value) : bool {
            return $value !== null;
        });
    }
}
