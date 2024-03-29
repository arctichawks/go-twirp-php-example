<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/service.proto

namespace App_php_golang_client_server;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Hat is a piece of headwear made by a Haberdasher.
 *
 * Generated from protobuf message <code>app_php_golang_client_server.Hat</code>
 */
class Hat extends \Google\Protobuf\Internal\Message
{
    /**
     * The size of a hat should always be in inches.
     *
     * Generated from protobuf field <code>int32 size = 1;</code>
     */
    protected $size = 0;
    /**
     * The color of a hat will never be 'invisible', but other than
     * that, anything is fair game.
     *
     * Generated from protobuf field <code>string color = 2;</code>
     */
    protected $color = '';
    /**
     * The name of a hat is it's type. Like, 'bowler', or something.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $size
     *           The size of a hat should always be in inches.
     *     @type string $color
     *           The color of a hat will never be 'invisible', but other than
     *           that, anything is fair game.
     *     @type string $name
     *           The name of a hat is it's type. Like, 'bowler', or something.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The size of a hat should always be in inches.
     *
     * Generated from protobuf field <code>int32 size = 1;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The size of a hat should always be in inches.
     *
     * Generated from protobuf field <code>int32 size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * The color of a hat will never be 'invisible', but other than
     * that, anything is fair game.
     *
     * Generated from protobuf field <code>string color = 2;</code>
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * The color of a hat will never be 'invisible', but other than
     * that, anything is fair game.
     *
     * Generated from protobuf field <code>string color = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->color = $var;

        return $this;
    }

    /**
     * The name of a hat is it's type. Like, 'bowler', or something.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of a hat is it's type. Like, 'bowler', or something.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

