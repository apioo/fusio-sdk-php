<?php

namespace BackendConnectionForm;

use GuzzleHttp\Client;
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

        $this->url = $baseUrl . '/backend/connection/form';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    public function get(GetQuery $query): Container
    {
        $options = [
            'query' => $this->convertToArray($query),
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->convertToObject($data, Container::class);
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
 * @Title("option")
 */
class Option
{
    /**
     * @Key("key")
     * @Type("string")
     */
    protected $key;
    /**
     * @Key("value")
     * @Type("string")
     */
    protected $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/**
 * @Title("textarea")
 */
class Textarea
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("mode")
     * @Type("string")
     */
    protected $mode;
    public function setElement($element)
    {
        $this->element = $element;
    }
    public function getElement()
    {
        return $this->element;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setHelp($help)
    {
        $this->help = $help;
    }
    public function getHelp()
    {
        return $this->help;
    }
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
    public function getMode()
    {
        return $this->mode;
    }
}
/**
 * @Title("tag")
 */
class Tag
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    public function setElement($element)
    {
        $this->element = $element;
    }
    public function getElement()
    {
        return $this->element;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setHelp($help)
    {
        $this->help = $help;
    }
    public function getHelp()
    {
        return $this->help;
    }
}
/**
 * @Title("select")
 */
class Select
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("options")
     * @Type("array")
     * @Items(@Ref("PSX\Generation\Option"))
     */
    protected $options;
    public function setElement($element)
    {
        $this->element = $element;
    }
    public function getElement()
    {
        return $this->element;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setHelp($help)
    {
        $this->help = $help;
    }
    public function getHelp()
    {
        return $this->help;
    }
    public function setOptions($options)
    {
        $this->options = $options;
    }
    public function getOptions()
    {
        return $this->options;
    }
}
/**
 * @Title("input")
 */
class Input
{
    /**
     * @Key("element")
     * @Type("string")
     */
    protected $element;
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("help")
     * @Type("string")
     */
    protected $help;
    /**
     * @Key("type")
     * @Type("string")
     */
    protected $type;
    public function setElement($element)
    {
        $this->element = $element;
    }
    public function getElement()
    {
        return $this->element;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setHelp($help)
    {
        $this->help = $help;
    }
    public function getHelp()
    {
        return $this->help;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/**
 * @Title("container")
 */
class Container
{
    /**
     * @Key("element")
     * @Type("array")
     * @Items(@Schema(oneOf={@Ref("PSX\Generation\Input"), @Ref("PSX\Generation\Select"), @Ref("PSX\Generation\Tag"), @Ref("PSX\Generation\Textarea")}))
     */
    protected $element;
    public function setElement($element)
    {
        $this->element = $element;
    }
    public function getElement()
    {
        return $this->element;
    }
}
/**
 * @Title("GetQuery")
 */
class GetQuery
{
    /**
     * @Key("class")
     * @Type("string")
     */
    protected $class;
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function getClass()
    {
        return $this->class;
    }
}
/**
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("GetQuery")
     * @Ref("PSX\Generation\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Container")
     * @Ref("PSX\Generation\Container")
     */
    protected $Container;
    public function setGetQuery($GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    public function getGetQuery()
    {
        return $this->GetQuery;
    }
    public function setContainer($Container)
    {
        $this->Container = $Container;
    }
    public function getContainer()
    {
        return $this->Container;
    }
}

