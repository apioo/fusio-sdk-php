<?php

namespace ExportSchemaName;

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
     * @var string
     */
    private $name;

    public function __construct(string $name, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->name = $name;

        $this->url = $baseUrl . '/export/schema/' . $name . '';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Export_Schema
     */
    public function get(): Export_Schema
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Export_Schema::class);
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
 * @Title("Export Schema Form")
 * @Description("Contains a ui vocabulary to augment the request JsonSchema")
 */
class Export_Schema_Form
{
}
/**
 * @Title("Export Schema JsonSchema")
 * @Description("Contains a JsonSchema")
 */
class Export_Schema_JsonSchema
{
}
/**
 * @Title("Export Schema")
 */
class Export_Schema
{
    /**
     * @Key("schema")
     * @Ref("ExportSchemaName\Export_Schema_JsonSchema")
     */
    protected $schema;
    /**
     * @Key("form")
     * @Ref("ExportSchemaName\Export_Schema_Form")
     */
    protected $form;
    /**
     * @param Export_Schema_JsonSchema $schema
     */
    public function setSchema(?Export_Schema_JsonSchema $schema)
    {
        $this->schema = $schema;
    }
    /**
     * @return Export_Schema_JsonSchema
     */
    public function getSchema() : ?Export_Schema_JsonSchema
    {
        return $this->schema;
    }
    /**
     * @param Export_Schema_Form $form
     */
    public function setForm(?Export_Schema_Form $form)
    {
        $this->form = $form;
    }
    /**
     * @return Export_Schema_Form
     */
    public function getForm() : ?Export_Schema_Form
    {
        return $this->form;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Export_Schema")
     * @Ref("ExportSchemaName\Export_Schema")
     */
    protected $Export_Schema;
    /**
     * @param Export_Schema $Export_Schema
     */
    public function setExport_Schema(?Export_Schema $Export_Schema)
    {
        $this->Export_Schema = $Export_Schema;
    }
    /**
     * @return Export_Schema
     */
    public function getExport_Schema() : ?Export_Schema
    {
        return $this->Export_Schema;
    }
}

