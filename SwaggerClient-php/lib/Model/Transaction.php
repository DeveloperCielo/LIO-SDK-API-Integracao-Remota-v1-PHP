<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LIO - Order Management API
 *
 * API de gerenciamento de pedidos da LIO.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Transaction Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'transaction_type' => 'string',
        'status' => 'string',
        'description' => 'string',
        'terminal_number' => 'int',
        'card' => '\Swagger\Client\Model\Card',
        'number' => 'int',
        'authorization_code' => 'int',
        'payment_product' => '\Swagger\Client\Model\PaymentProduct',
        'amount' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'transaction_type' => 'transaction_type',
        'status' => 'status',
        'description' => 'description',
        'terminal_number' => 'terminal_number',
        'card' => 'card',
        'number' => 'number',
        'authorization_code' => 'authorization_code',
        'payment_product' => 'payment_product',
        'amount' => 'amount',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transaction_type' => 'setTransactionType',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'terminal_number' => 'setTerminalNumber',
        'card' => 'setCard',
        'number' => 'setNumber',
        'authorization_code' => 'setAuthorizationCode',
        'payment_product' => 'setPaymentProduct',
        'amount' => 'setAmount',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transaction_type' => 'getTransactionType',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'terminal_number' => 'getTerminalNumber',
        'card' => 'getCard',
        'number' => 'getNumber',
        'authorization_code' => 'getAuthorizationCode',
        'payment_product' => 'getPaymentProduct',
        'amount' => 'getAmount',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TRANSACTION_TYPE_PAYMENT = 'PAYMENT';
    const TRANSACTION_TYPE_CANCELLATION = 'CANCELLATION';
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_PENDING = 'PENDING';
    const STATUS_CANCELLED = 'CANCELLED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_PAYMENT,
            self::TRANSACTION_TYPE_CANCELLATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONFIRMED,
            self::STATUS_PENDING,
            self::STATUS_CANCELLED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['terminal_number'] = isset($data['terminal_number']) ? $data['terminal_number'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['authorization_code'] = isset($data['authorization_code']) ? $data['authorization_code'] : null;
        $this->container['payment_product'] = isset($data['payment_product']) ? $data['payment_product'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalid_properties[] = "'transaction_type' can't be null";
        }
        $allowed_values = ["PAYMENT", "CANCELLATION"];
        if (!in_array($this->container['transaction_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'transaction_type', must be one of 'PAYMENT', 'CANCELLATION'.";
        }

        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["CONFIRMED", "PENDING", "CANCELLED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'CONFIRMED', 'PENDING', 'CANCELLED'.";
        }

        if ($this->container['terminal_number'] === null) {
            $invalid_properties[] = "'terminal_number' can't be null";
        }
        if ($this->container['card'] === null) {
            $invalid_properties[] = "'card' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalid_properties[] = "'number' can't be null";
        }
        if ($this->container['authorization_code'] === null) {
            $invalid_properties[] = "'authorization_code' can't be null";
        }
        if ($this->container['payment_product'] === null) {
            $invalid_properties[] = "'payment_product' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalid_properties[] = "'updated_at' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['transaction_type'] === null) {
            return false;
        }
        $allowed_values = ["PAYMENT", "CANCELLATION"];
        if (!in_array($this->container['transaction_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["CONFIRMED", "PENDING", "CANCELLED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['terminal_number'] === null) {
            return false;
        }
        if ($this->container['card'] === null) {
            return false;
        }
        if ($this->container['number'] === null) {
            return false;
        }
        if ($this->container['authorization_code'] === null) {
            return false;
        }
        if ($this->container['payment_product'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['updated_at'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id UUID que identifica unicamente a transação.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transaction_type
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     * @param string $transaction_type Tipo da transação.
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $allowed_values = array('PAYMENT', 'CANCELLATION');
        if ((!in_array($transaction_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'transaction_type', must be one of 'PAYMENT', 'CANCELLATION'");
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status da transação.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('CONFIRMED', 'PENDING', 'CANCELLED');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'CONFIRMED', 'PENDING', 'CANCELLED'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Descrição da transação.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets terminal_number
     * @return int
     */
    public function getTerminalNumber()
    {
        return $this->container['terminal_number'];
    }

    /**
     * Sets terminal_number
     * @param int $terminal_number Número do terminal da Cielo Lio em que o pagamento foi realizado.
     * @return $this
     */
    public function setTerminalNumber($terminal_number)
    {
        $this->container['terminal_number'] = $terminal_number;

        return $this;
    }

    /**
     * Gets card
     * @return \Swagger\Client\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \Swagger\Client\Model\Card $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets number
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param int $number Número Sequencial Único (NSU) da transação.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets authorization_code
     * @return int
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorization_code'];
    }

    /**
     * Sets authorization_code
     * @param int $authorization_code Código de autorização da transação.
     * @return $this
     */
    public function setAuthorizationCode($authorization_code)
    {
        $this->container['authorization_code'] = $authorization_code;

        return $this;
    }

    /**
     * Gets payment_product
     * @return \Swagger\Client\Model\PaymentProduct
     */
    public function getPaymentProduct()
    {
        return $this->container['payment_product'];
    }

    /**
     * Sets payment_product
     * @param \Swagger\Client\Model\PaymentProduct $payment_product
     * @return $this
     */
    public function setPaymentProduct($payment_product)
    {
        $this->container['payment_product'] = $payment_product;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount Valor da transação. Exemplo: O valor de R$ 10,00 é representado como 1000.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at Data da criação/inclusão do item no pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z)
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at Data da última atualização do item no pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z)
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


