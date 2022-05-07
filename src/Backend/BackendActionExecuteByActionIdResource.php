<?php
/**
 * BackendActionExecuteByActionIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendActionExecuteByActionIdResource extends ResourceAbstract
{
    private string $url;

    private string $action_id;

    public function __construct(string $action_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->action_id = $action_id;
        $this->url = $this->baseUrl . '/backend/action/execute/' . $action_id . '';
    }

    /**
     * @param Action_Execute_Request $data
     * @return Action_Execute_Response
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function backendActionActionExecute(Action_Execute_Request $data): Action_Execute_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, Action_Execute_Response::class);
    }

}
