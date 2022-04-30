<?php
/**
 * BackendMarketplaceResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendMarketplaceResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/marketplace';
    }

    /**
     * @return Marketplace_Collection
     */
    public function backendActionMarketplaceGetAll(): Marketplace_Collection
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Marketplace_Collection::class);
    }

    /**
     * @param Marketplace_Install $data
     * @return Marketplace_Install
     */
    public function backendActionMarketplaceInstall(?Marketplace_Install $data = null): Marketplace_Install
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Marketplace_Install::class);
    }

}
