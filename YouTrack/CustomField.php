<?php
namespace YouTrack;

/**
 * A class describing a youtrack custom field.
 *
 * @property string name
 * @method string getName
 * @method string setName(string $value)
 * @property string type
 * @method string getType
 * @method string setType(string $value)
 * @property string canBeEmpty
 * @method string getCanBeEmpty
 * @method string setCanBeEmpty(string $value)
 * @property string emptyText
 * @method string getEmptyText
 * @method string setEmptyText(string $value)
 * @property string param
 * @method string getParam
 * @method string setParam(string $value)
 *
 * @link https://www.jetbrains.com/help/youtrack/standalone/2017.2/GET-Project-Custom-Field.html
 */
class CustomField extends BaseObject
{
    public function __construct(\SimpleXMLElement $xml = null, Connection $youtrack = null)
    {
        parent::__construct($xml, $youtrack);
    }
}
