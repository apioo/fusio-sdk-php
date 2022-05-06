<?php
/**
 * BackendActionExecuteByActionIdResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

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

    public function __construct(string $action_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->action_id = $action_id;
        $this->url = $this->baseUrl . '/backend/action/execute/' . $action_id . '';
    }

    /**
     * @param Action_Execute_Request $data
     * @return Action_Execute_Response
     */
    public function backendActionActionExecute(?Action_Execute_Request $data = null): Action_Execute_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Action_Execute_Response::class);
    }

}
