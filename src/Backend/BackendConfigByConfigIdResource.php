<?php
/**
 * BackendConfigByConfigIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */


use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendConfigByConfigIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $config_id;

    public function __construct(string $config_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->config_id = $config_id;
        $this->url = $this->baseUrl . '/backend/config/' . $config_id . '';
    }

    /**
     * @return Config
     */
    public function backendActionConfigGet(): Config
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Config::class);
    }

    /**
     * @param Config_Update $data
     * @return Message
     */
    public function backendActionConfigUpdate(?Config_Update $data = null): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
