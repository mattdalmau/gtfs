<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime-mta.proto

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An alert, indicating some sort of incident in the public transit network.
 *
 * Generated from protobuf message <code>transit_realtime.Alert</code>
 */
class Alert extends \Google\Protobuf\Internal\Message
{
    /**
     * Time when the alert should be shown to the user. If missing, the
     * alert will be shown as long as it appears in the feed.
     * If multiple ranges are given, the alert will be shown during all of them.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TimeRange active_period = 1;</code>
     */
    private $active_period;
    /**
     * Entities whose users we should notify of this alert.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.EntitySelector informed_entity = 5;</code>
     */
    private $informed_entity;
    /**
     * optional Cause cause = 6 [default = UNKNOWN_CAUSE];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Cause cause = 6;</code>
     */
    protected $cause = 0;
    /**
     * optional Effect effect = 7 [default = UNKNOWN_EFFECT];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Effect effect = 7;</code>
     */
    protected $effect = 0;
    /**
     * The URL which provides additional information about the alert.
     * optional TranslatedString url = 8;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString url = 8;</code>
     */
    protected $url = null;
    /**
     * Alert header. Contains a short summary of the alert text as plain-text.
     * optional TranslatedString header_text = 10;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString header_text = 10;</code>
     */
    protected $header_text = null;
    /**
     * Full description for the alert as plain-text. The information in the
     * description should add to the information of the header.
     * optional TranslatedString description_text = 11;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString description_text = 11;</code>
     */
    protected $description_text = null;
    /**
     * The extensions namespace allows 3rd-party developers to extend the
     * GTFS-realtime specification in order to add and evaluate new features
     * and modifications to the spec.
     * extensions 1000 to 1999;
     *
     * Generated from protobuf field <code>.transit_realtime.MercuryAlert mercury_alert = 1001;</code>
     */
    protected $mercury_alert = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Transit_realtime\TimeRange[]|\Google\Protobuf\Internal\RepeatedField $active_period
     *           Time when the alert should be shown to the user. If missing, the
     *           alert will be shown as long as it appears in the feed.
     *           If multiple ranges are given, the alert will be shown during all of them.
     *     @type \Transit_realtime\EntitySelector[]|\Google\Protobuf\Internal\RepeatedField $informed_entity
     *           Entities whose users we should notify of this alert.
     *     @type int $cause
     *           optional Cause cause = 6 [default = UNKNOWN_CAUSE];
     *     @type int $effect
     *           optional Effect effect = 7 [default = UNKNOWN_EFFECT];
     *     @type \Transit_realtime\TranslatedString $url
     *           The URL which provides additional information about the alert.
     *           optional TranslatedString url = 8;
     *     @type \Transit_realtime\TranslatedString $header_text
     *           Alert header. Contains a short summary of the alert text as plain-text.
     *           optional TranslatedString header_text = 10;
     *     @type \Transit_realtime\TranslatedString $description_text
     *           Full description for the alert as plain-text. The information in the
     *           description should add to the information of the header.
     *           optional TranslatedString description_text = 11;
     *     @type \Transit_realtime\MercuryAlert $mercury_alert
     *           The extensions namespace allows 3rd-party developers to extend the
     *           GTFS-realtime specification in order to add and evaluate new features
     *           and modifications to the spec.
     *           extensions 1000 to 1999;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtimeMta::initOnce();
        parent::__construct($data);
    }

    /**
     * Time when the alert should be shown to the user. If missing, the
     * alert will be shown as long as it appears in the feed.
     * If multiple ranges are given, the alert will be shown during all of them.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TimeRange active_period = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivePeriod()
    {
        return $this->active_period;
    }

    /**
     * Time when the alert should be shown to the user. If missing, the
     * alert will be shown as long as it appears in the feed.
     * If multiple ranges are given, the alert will be shown during all of them.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TimeRange active_period = 1;</code>
     * @param \Transit_realtime\TimeRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivePeriod($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Transit_realtime\TimeRange::class);
        $this->active_period = $arr;

        return $this;
    }

    /**
     * Entities whose users we should notify of this alert.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.EntitySelector informed_entity = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInformedEntity()
    {
        return $this->informed_entity;
    }

    /**
     * Entities whose users we should notify of this alert.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.EntitySelector informed_entity = 5;</code>
     * @param \Transit_realtime\EntitySelector[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInformedEntity($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Transit_realtime\EntitySelector::class);
        $this->informed_entity = $arr;

        return $this;
    }

    /**
     * optional Cause cause = 6 [default = UNKNOWN_CAUSE];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Cause cause = 6;</code>
     * @return int
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * optional Cause cause = 6 [default = UNKNOWN_CAUSE];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Cause cause = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\Alert_Cause::class);
        $this->cause = $var;

        return $this;
    }

    /**
     * optional Effect effect = 7 [default = UNKNOWN_EFFECT];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Effect effect = 7;</code>
     * @return int
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * optional Effect effect = 7 [default = UNKNOWN_EFFECT];
     *
     * Generated from protobuf field <code>.transit_realtime.Alert.Effect effect = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEffect($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\Alert_Effect::class);
        $this->effect = $var;

        return $this;
    }

    /**
     * The URL which provides additional information about the alert.
     * optional TranslatedString url = 8;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString url = 8;</code>
     * @return \Transit_realtime\TranslatedString
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The URL which provides additional information about the alert.
     * optional TranslatedString url = 8;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString url = 8;</code>
     * @param \Transit_realtime\TranslatedString $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->url = $var;

        return $this;
    }

    /**
     * Alert header. Contains a short summary of the alert text as plain-text.
     * optional TranslatedString header_text = 10;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString header_text = 10;</code>
     * @return \Transit_realtime\TranslatedString
     */
    public function getHeaderText()
    {
        return $this->header_text;
    }

    /**
     * Alert header. Contains a short summary of the alert text as plain-text.
     * optional TranslatedString header_text = 10;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString header_text = 10;</code>
     * @param \Transit_realtime\TranslatedString $var
     * @return $this
     */
    public function setHeaderText($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->header_text = $var;

        return $this;
    }

    /**
     * Full description for the alert as plain-text. The information in the
     * description should add to the information of the header.
     * optional TranslatedString description_text = 11;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString description_text = 11;</code>
     * @return \Transit_realtime\TranslatedString
     */
    public function getDescriptionText()
    {
        return $this->description_text;
    }

    /**
     * Full description for the alert as plain-text. The information in the
     * description should add to the information of the header.
     * optional TranslatedString description_text = 11;
     *
     * Generated from protobuf field <code>.transit_realtime.TranslatedString description_text = 11;</code>
     * @param \Transit_realtime\TranslatedString $var
     * @return $this
     */
    public function setDescriptionText($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->description_text = $var;

        return $this;
    }

    /**
     * The extensions namespace allows 3rd-party developers to extend the
     * GTFS-realtime specification in order to add and evaluate new features
     * and modifications to the spec.
     * extensions 1000 to 1999;
     *
     * Generated from protobuf field <code>.transit_realtime.MercuryAlert mercury_alert = 1001;</code>
     * @return \Transit_realtime\MercuryAlert
     */
    public function getMercuryAlert()
    {
        return $this->mercury_alert;
    }

    /**
     * The extensions namespace allows 3rd-party developers to extend the
     * GTFS-realtime specification in order to add and evaluate new features
     * and modifications to the spec.
     * extensions 1000 to 1999;
     *
     * Generated from protobuf field <code>.transit_realtime.MercuryAlert mercury_alert = 1001;</code>
     * @param \Transit_realtime\MercuryAlert $var
     * @return $this
     */
    public function setMercuryAlert($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\MercuryAlert::class);
        $this->mercury_alert = $var;

        return $this;
    }

}

