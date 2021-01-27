<?php 
/**
 * BackendActionExecuteByActionIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendActionExecuteByActionIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $action_id;

    public function __construct(string $action_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->action_id = $action_id;
        $this->url = $this->baseUrl . '/backend/action/execute/' . $action_id . '';
    }

    /**
     * @param Action_Execute_Request $data
     * @return Action_Execute_Response
     */
    public function backendActionActionExecute(?Action_Execute_Request $data): Action_Execute_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Action_Execute_Response::class);
    }

}
