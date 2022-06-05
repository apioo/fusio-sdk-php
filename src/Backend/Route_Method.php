<?php
/**
 * Route_Method generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Route_Method implements \JsonSerializable
{
    protected ?string $method = null;
    protected ?int $version = null;
    protected ?int $status = null;
    protected ?bool $active = null;
    protected ?bool $public = null;
    protected ?string $description = null;
    protected ?string $operationId = null;
    protected ?string $parameters = null;
    protected ?string $request = null;
    protected ?string $response = null;
    protected ?Route_Method_Responses $responses = null;
    protected ?string $action = null;
    protected ?int $costs = null;
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setVersion(?int $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
    {
        return $this->version;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setActive(?bool $active) : void
    {
        $this->active = $active;
    }
    public function getActive() : ?bool
    {
        return $this->active;
    }
    public function setPublic(?bool $public) : void
    {
        $this->public = $public;
    }
    public function getPublic() : ?bool
    {
        return $this->public;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setRequest(?string $request) : void
    {
        $this->request = $request;
    }
    public function getRequest() : ?string
    {
        return $this->request;
    }
    public function setResponse(?string $response) : void
    {
        $this->response = $response;
    }
    public function getResponse() : ?string
    {
        return $this->response;
    }
    public function setResponses(?Route_Method_Responses $responses) : void
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?Route_Method_Responses
    {
        return $this->responses;
    }
    public function setAction(?string $action) : void
    {
        $this->action = $action;
    }
    public function getAction() : ?string
    {
        return $this->action;
    }
    public function setCosts(?int $costs) : void
    {
        $this->costs = $costs;
    }
    public function getCosts() : ?int
    {
        return $this->costs;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('method' => $this->method, 'version' => $this->version, 'status' => $this->status, 'active' => $this->active, 'public' => $this->public, 'description' => $this->description, 'operationId' => $this->operationId, 'parameters' => $this->parameters, 'request' => $this->request, 'response' => $this->response, 'responses' => $this->responses, 'action' => $this->action, 'costs' => $this->costs), static function ($value) : bool {
            return $value !== null;
        });
    }
}
