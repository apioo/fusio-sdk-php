<?php

namespace BackendSchemaPreviewSchema_id09;

use GuzzleHttp\Client;
use PSX\Json\Parser;
use PSX\Schema\Parser\Popo\Dumper;
use PSX\Schema\SchemaManager;
use PSX\Schema\SchemaTraverser;
use PSX\Schema\Visitor\TypeVisitor;

class Resource
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $token;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var SchemaManager
     */
    private $schemaManager;

    /**
     * @var int
     */
    private $schema_id;

    public function __construct(int $schema_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->schema_id = $schema_id;

        $this->url = $baseUrl . '/backend/schema/preview/' . $schema_id . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Schema_Preview_Response
     */
    public function post(): Schema_Preview_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Schema_Preview_Response::class);
    }

    private function convertToArray($object)
    {
        return (new Dumper())->dump($object);
    }

    private function convertToObject(string $data, ?string $class)
    {
        $data = Parser::decode($data);
        if ($class !== null) {
            $schema = $this->schemaManager->getSchema($class);
            return (new SchemaTraverser())->traverse($data, $schema, new TypeVisitor());
        } else {
            return $data;
        }
    }
}





/**
 * @Title("Schema Preview Response")
 */
class Schema_Preview_Response
{
    /**
     * @Key("preview")
     * @Type("string")
     */
    protected $preview;
    /**
     * @param string $preview
     */
    public function setPreview(?string $preview)
    {
        $this->preview = $preview;
    }
    /**
     * @return string
     */
    public function getPreview() : ?string
    {
        return $this->preview;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Schema_Preview_Response")
     * @Ref("BackendSchemaPreviewSchema_id09\Schema_Preview_Response")
     */
    protected $Schema_Preview_Response;
    /**
     * @param Schema_Preview_Response $Schema_Preview_Response
     */
    public function setSchema_Preview_Response(?Schema_Preview_Response $Schema_Preview_Response)
    {
        $this->Schema_Preview_Response = $Schema_Preview_Response;
    }
    /**
     * @return Schema_Preview_Response
     */
    public function getSchema_Preview_Response() : ?Schema_Preview_Response
    {
        return $this->Schema_Preview_Response;
    }
}

