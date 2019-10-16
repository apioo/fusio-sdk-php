<?php

namespace BackendActionForm;

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

        $this->url = $baseUrl . '/backend/action/form';
        $this->token = $token;
        $this->httpClient = $httpClient ? $httpClient : new Client();
        $this->schemaManager = $schemaManager ? $schemaManager : new SchemaManager();
    }

    /**
     * @param GetQuery $query
     * @return Container
     */
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
    /**
     * @param string $key
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * @param string $value
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue() : ?string
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
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
    }
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param string $mode
     */
    public function setMode(?string $mode)
    {
        $this->mode = $mode;
    }
    /**
     * @return string
     */
    public function getMode() : ?string
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
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
    }
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
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
     * @Items(@Ref("BackendActionForm\Option"))
     */
    protected $options;
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
    }
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param array<Option> $options
     */
    public function setOptions(?array $options)
    {
        $this->options = $options;
    }
    /**
     * @return array<Option>
     */
    public function getOptions() : ?array
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
    /**
     * @param string $element
     */
    public function setElement(?string $element)
    {
        $this->element = $element;
    }
    /**
     * @return string
     */
    public function getElement() : ?string
    {
        return $this->element;
    }
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
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $help
     */
    public function setHelp(?string $help)
    {
        $this->help = $help;
    }
    /**
     * @return string
     */
    public function getHelp() : ?string
    {
        return $this->help;
    }
    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType() : ?string
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
     * @Items(@Schema(oneOf={@Ref("BackendActionForm\Input"), @Ref("BackendActionForm\Select"), @Ref("BackendActionForm\Tag"), @Ref("BackendActionForm\Textarea")}))
     */
    protected $element;
    /**
     * @param array<Input|Select|Tag|Textarea> $element
     */
    public function setElement(?array $element)
    {
        $this->element = $element;
    }
    /**
     * @return array<Input|Select|Tag|Textarea>
     */
    public function getElement() : ?array
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
 * @Title("Endpoint")
 */
class Endpoint
{
    /**
     * @Key("GetQuery")
     * @Ref("BackendActionForm\GetQuery")
     */
    protected $GetQuery;
    /**
     * @Key("Container")
     * @Ref("BackendActionForm\Container")
     */
    protected $Container;
    /**
     * @param GetQuery $GetQuery
     */
    public function setGetQuery(?GetQuery $GetQuery)
    {
        $this->GetQuery = $GetQuery;
    }
    /**
     * @return GetQuery
     */
    public function getGetQuery() : ?GetQuery
    {
        return $this->GetQuery;
    }
    /**
     * @param Container $Container
     */
    public function setContainer(?Container $Container)
    {
        $this->Container = $Container;
    }
    /**
     * @return Container
     */
    public function getContainer() : ?Container
    {
        return $this->Container;
    }
}

