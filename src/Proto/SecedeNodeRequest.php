<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: organization.proto

namespace Goforphp\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *退出企业、团队、部门
 *
 * Generated from protobuf message <code>proto.SecedeNodeRequest</code>
 */
class SecedeNodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>int32 nodeId = 2;</code>
     */
    private $nodeId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $nodeId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 nodeId = 2;</code>
     * @return int
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Generated from protobuf field <code>int32 nodeId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkInt32($var);
        $this->nodeId = $var;

        return $this;
    }

}

