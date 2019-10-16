<?php

namespace BackendActionList;

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

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {

        $this->url = $baseUrl . '/backend/action/list';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @return Action_Index
     */
    public function get(): Action_Index
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Action_Index::class);
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
 * @Title("Action Action")
 */
class Action_Action
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $class
     */
    public function setClass(?string $class)
    {
        $this->class = $class;
    }
    /**
     * @return string
     */
    public function getClass() : ?string
    {
        return $this->class;
    }
}
/**
 * @Title("Action Index")
 */
class Action_Index
{
    /**
     * @Key("actions")
     * @Type("array")
     * @Items(@Ref("BackendActionList\Action_Action"))
     */
    protected $actions;
    /**
     * @param array<Action_Action> $actions
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return array<Action_Action>
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("Action_Index")
     * @Ref("BackendActionList\Action_Index")
     */
    protected $Action_Index;
    /**
     * @param Action_Index $Action_Index
     */
    public function setAction_Index(?Action_Index $Action_Index)
    {
        $this->Action_Index = $Action_Index;
    }
    /**
     * @return Action_Index
     */
    public function getAction_Index() : ?Action_Index
    {
        return $this->Action_Index;
    }
}

