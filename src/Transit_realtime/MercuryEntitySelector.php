<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime-mta.proto

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mercury extensions for the Feed Entity Selector
 *
 * Generated from protobuf message <code>transit_realtime.MercuryEntitySelector</code>
 */
class MercuryEntitySelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Format for sort_order is 'GTFS-ID:Priority', e.g. 'MTASBWY:G:16'
     *
     * Generated from protobuf field <code>string sort_order = 1;</code>
     */
    protected $sort_order = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sort_order
     *           Format for sort_order is 'GTFS-ID:Priority', e.g. 'MTASBWY:G:16'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtimeMta::initOnce();
        parent::__construct($data);
    }

    /**
     * Format for sort_order is 'GTFS-ID:Priority', e.g. 'MTASBWY:G:16'
     *
     * Generated from protobuf field <code>string sort_order = 1;</code>
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Format for sort_order is 'GTFS-ID:Priority', e.g. 'MTASBWY:G:16'
     *
     * Generated from protobuf field <code>string sort_order = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->sort_order = $var;

        return $this;
    }

}

