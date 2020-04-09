<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime-mta.proto

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mercury extensions for the Feed Alert
 *
 * Generated from protobuf message <code>transit_realtime.MercuryAlert</code>
 */
class MercuryAlert extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 created_at = 1;</code>
     */
    protected $created_at = 0;
    /**
     * Generated from protobuf field <code>uint64 updated_at = 2;</code>
     */
    protected $updated_at = 0;
    /**
     * Generated from protobuf field <code>string alert_type = 3;</code>
     */
    protected $alert_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $created_at
     *     @type int|string $updated_at
     *     @type string $alert_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtimeMta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 created_at = 1;</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>uint64 created_at = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkUint64($var);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 updated_at = 2;</code>
     * @return int|string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>uint64 updated_at = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkUint64($var);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string alert_type = 3;</code>
     * @return string
     */
    public function getAlertType()
    {
        return $this->alert_type;
    }

    /**
     * Generated from protobuf field <code>string alert_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAlertType($var)
    {
        GPBUtil::checkString($var, True);
        $this->alert_type = $var;

        return $this;
    }

}
