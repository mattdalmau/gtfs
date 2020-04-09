<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime-mta.proto

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Realtime update of the progress of a vehicle along a trip.
 * Depending on the value of ScheduleRelationship, a TripUpdate can specify:
 * - A trip that proceeds along the schedule.
 * - A trip that proceeds along a route but has no fixed schedule.
 * - A trip that have been added or removed with regard to schedule.
 * The updates can be for future, predicted arrival/departure events, or for
 * past events that already occurred.
 * Normally, updates should get more precise and more certain (see
 * uncertainty below) as the events gets closer to current time.
 * Even if that is not possible, the information for past events should be
 * precise and certain. In particular, if an update points to time in the past
 * but its update's uncertainty is not 0, the client should conclude that the
 * update is a (wrong) prediction and that the trip has not completed yet.
 * Note that the update can describe a trip that is already completed.
 * To this end, it is enough to provide an update for the last stop of the trip.
 * If the time of that is in the past, the client will conclude from that that
 * the whole trip is in the past (it is possible, although inconsequential, to
 * also provide updates for preceding stops).
 * This option is most relevant for a trip that has completed ahead of schedule,
 * but according to the schedule, the trip is still proceeding at the current
 * time. Removing the updates for this trip could make the client assume
 * that the trip is still proceeding.
 * Note that the feed provider is allowed, but not required, to purge past
 * updates - this is one case where this would be practically useful.
 *
 * Generated from protobuf message <code>transit_realtime.TripUpdate</code>
 */
class TripUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * The Trip that this message applies to. There can be at most one
     * TripUpdate entity for each actual trip instance.
     * If there is none, that means there is no prediction information available.
     * It does *not* mean that the trip is progressing according to schedule.
     * required TripDescriptor trip = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.TripDescriptor trip = 1;</code>
     */
    protected $trip = null;
    /**
     * Additional information on the vehicle that is serving this trip.
     * optional VehicleDescriptor vehicle = 3;
     *
     * Generated from protobuf field <code>.transit_realtime.VehicleDescriptor vehicle = 3;</code>
     */
    protected $vehicle = null;
    /**
     * Updates to StopTimes for the trip (both future, i.e., predictions, and in
     * some cases, past ones, i.e., those that already happened).
     * The updates must be sorted by stop_sequence, and apply for all the
     * following stops of the trip up to the next specified one.
     * Example 1:
     * For a trip with 20 stops, a StopTimeUpdate with arrival delay and departure
     * delay of 0 for stop_sequence of the current stop means that the trip is
     * exactly on time.
     * Example 2:
     * For the same trip instance, 3 StopTimeUpdates are provided:
     * - delay of 5 min for stop_sequence 3
     * - delay of 1 min for stop_sequence 8
     * - delay of unspecified duration for stop_sequence 10
     * This will be interpreted as:
     * - stop_sequences 3,4,5,6,7 have delay of 5 min.
     * - stop_sequences 8,9 have delay of 1 min.
     * - stop_sequences 10,... have unknown delay.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TripUpdate.StopTimeUpdate stop_time_update = 2;</code>
     */
    private $stop_time_update;
    /**
     * Moment at which the vehicle's real-time progress was measured. In POSIX
     * time (i.e., the number of seconds since January 1st 1970 00:00:00 UTC).
     * optional uint64 timestamp = 4;
     *
     * Generated from protobuf field <code>uint64 timestamp = 4;</code>
     */
    protected $timestamp = 0;
    /**
     * The current schedule deviation for the trip.  Delay should only be
     * specified when the prediction is given relative to some existing schedule
     * in GTFS.
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * Delay information in StopTimeUpdates take precedent of trip-level delay
     * information, such that trip-level delay is only propagated until the next
     * stop along the trip with a StopTimeUpdate delay value specified.
     * Feed providers are strongly encouraged to provide a TripUpdate.timestamp
     * value indicating when the delay value was last updated, in order to
     * evaluate the freshness of the data.
     * NOTE: This field is still experimental, and subject to change. It may be
     * formally adopted in the future.
     * optional int32 delay = 5;
     *
     * Generated from protobuf field <code>int32 delay = 5;</code>
     */
    protected $delay = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Transit_realtime\TripDescriptor $trip
     *           The Trip that this message applies to. There can be at most one
     *           TripUpdate entity for each actual trip instance.
     *           If there is none, that means there is no prediction information available.
     *           It does *not* mean that the trip is progressing according to schedule.
     *           required TripDescriptor trip = 1;
     *     @type \Transit_realtime\VehicleDescriptor $vehicle
     *           Additional information on the vehicle that is serving this trip.
     *           optional VehicleDescriptor vehicle = 3;
     *     @type \Transit_realtime\TripUpdate\StopTimeUpdate[]|\Google\Protobuf\Internal\RepeatedField $stop_time_update
     *           Updates to StopTimes for the trip (both future, i.e., predictions, and in
     *           some cases, past ones, i.e., those that already happened).
     *           The updates must be sorted by stop_sequence, and apply for all the
     *           following stops of the trip up to the next specified one.
     *           Example 1:
     *           For a trip with 20 stops, a StopTimeUpdate with arrival delay and departure
     *           delay of 0 for stop_sequence of the current stop means that the trip is
     *           exactly on time.
     *           Example 2:
     *           For the same trip instance, 3 StopTimeUpdates are provided:
     *           - delay of 5 min for stop_sequence 3
     *           - delay of 1 min for stop_sequence 8
     *           - delay of unspecified duration for stop_sequence 10
     *           This will be interpreted as:
     *           - stop_sequences 3,4,5,6,7 have delay of 5 min.
     *           - stop_sequences 8,9 have delay of 1 min.
     *           - stop_sequences 10,... have unknown delay.
     *     @type int|string $timestamp
     *           Moment at which the vehicle's real-time progress was measured. In POSIX
     *           time (i.e., the number of seconds since January 1st 1970 00:00:00 UTC).
     *           optional uint64 timestamp = 4;
     *     @type int $delay
     *           The current schedule deviation for the trip.  Delay should only be
     *           specified when the prediction is given relative to some existing schedule
     *           in GTFS.
     *           Delay (in seconds) can be positive (meaning that the vehicle is late) or
     *           negative (meaning that the vehicle is ahead of schedule). Delay of 0
     *           means that the vehicle is exactly on time.
     *           Delay information in StopTimeUpdates take precedent of trip-level delay
     *           information, such that trip-level delay is only propagated until the next
     *           stop along the trip with a StopTimeUpdate delay value specified.
     *           Feed providers are strongly encouraged to provide a TripUpdate.timestamp
     *           value indicating when the delay value was last updated, in order to
     *           evaluate the freshness of the data.
     *           NOTE: This field is still experimental, and subject to change. It may be
     *           formally adopted in the future.
     *           optional int32 delay = 5;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtimeMta::initOnce();
        parent::__construct($data);
    }

    /**
     * The Trip that this message applies to. There can be at most one
     * TripUpdate entity for each actual trip instance.
     * If there is none, that means there is no prediction information available.
     * It does *not* mean that the trip is progressing according to schedule.
     * required TripDescriptor trip = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.TripDescriptor trip = 1;</code>
     * @return \Transit_realtime\TripDescriptor
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * The Trip that this message applies to. There can be at most one
     * TripUpdate entity for each actual trip instance.
     * If there is none, that means there is no prediction information available.
     * It does *not* mean that the trip is progressing according to schedule.
     * required TripDescriptor trip = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.TripDescriptor trip = 1;</code>
     * @param \Transit_realtime\TripDescriptor $var
     * @return $this
     */
    public function setTrip($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripDescriptor::class);
        $this->trip = $var;

        return $this;
    }

    /**
     * Additional information on the vehicle that is serving this trip.
     * optional VehicleDescriptor vehicle = 3;
     *
     * Generated from protobuf field <code>.transit_realtime.VehicleDescriptor vehicle = 3;</code>
     * @return \Transit_realtime\VehicleDescriptor
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Additional information on the vehicle that is serving this trip.
     * optional VehicleDescriptor vehicle = 3;
     *
     * Generated from protobuf field <code>.transit_realtime.VehicleDescriptor vehicle = 3;</code>
     * @param \Transit_realtime\VehicleDescriptor $var
     * @return $this
     */
    public function setVehicle($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\VehicleDescriptor::class);
        $this->vehicle = $var;

        return $this;
    }

    /**
     * Updates to StopTimes for the trip (both future, i.e., predictions, and in
     * some cases, past ones, i.e., those that already happened).
     * The updates must be sorted by stop_sequence, and apply for all the
     * following stops of the trip up to the next specified one.
     * Example 1:
     * For a trip with 20 stops, a StopTimeUpdate with arrival delay and departure
     * delay of 0 for stop_sequence of the current stop means that the trip is
     * exactly on time.
     * Example 2:
     * For the same trip instance, 3 StopTimeUpdates are provided:
     * - delay of 5 min for stop_sequence 3
     * - delay of 1 min for stop_sequence 8
     * - delay of unspecified duration for stop_sequence 10
     * This will be interpreted as:
     * - stop_sequences 3,4,5,6,7 have delay of 5 min.
     * - stop_sequences 8,9 have delay of 1 min.
     * - stop_sequences 10,... have unknown delay.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TripUpdate.StopTimeUpdate stop_time_update = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStopTimeUpdate()
    {
        return $this->stop_time_update;
    }

    /**
     * Updates to StopTimes for the trip (both future, i.e., predictions, and in
     * some cases, past ones, i.e., those that already happened).
     * The updates must be sorted by stop_sequence, and apply for all the
     * following stops of the trip up to the next specified one.
     * Example 1:
     * For a trip with 20 stops, a StopTimeUpdate with arrival delay and departure
     * delay of 0 for stop_sequence of the current stop means that the trip is
     * exactly on time.
     * Example 2:
     * For the same trip instance, 3 StopTimeUpdates are provided:
     * - delay of 5 min for stop_sequence 3
     * - delay of 1 min for stop_sequence 8
     * - delay of unspecified duration for stop_sequence 10
     * This will be interpreted as:
     * - stop_sequences 3,4,5,6,7 have delay of 5 min.
     * - stop_sequences 8,9 have delay of 1 min.
     * - stop_sequences 10,... have unknown delay.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.TripUpdate.StopTimeUpdate stop_time_update = 2;</code>
     * @param \Transit_realtime\TripUpdate\StopTimeUpdate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStopTimeUpdate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Transit_realtime\TripUpdate\StopTimeUpdate::class);
        $this->stop_time_update = $arr;

        return $this;
    }

    /**
     * Moment at which the vehicle's real-time progress was measured. In POSIX
     * time (i.e., the number of seconds since January 1st 1970 00:00:00 UTC).
     * optional uint64 timestamp = 4;
     *
     * Generated from protobuf field <code>uint64 timestamp = 4;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Moment at which the vehicle's real-time progress was measured. In POSIX
     * time (i.e., the number of seconds since January 1st 1970 00:00:00 UTC).
     * optional uint64 timestamp = 4;
     *
     * Generated from protobuf field <code>uint64 timestamp = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * The current schedule deviation for the trip.  Delay should only be
     * specified when the prediction is given relative to some existing schedule
     * in GTFS.
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * Delay information in StopTimeUpdates take precedent of trip-level delay
     * information, such that trip-level delay is only propagated until the next
     * stop along the trip with a StopTimeUpdate delay value specified.
     * Feed providers are strongly encouraged to provide a TripUpdate.timestamp
     * value indicating when the delay value was last updated, in order to
     * evaluate the freshness of the data.
     * NOTE: This field is still experimental, and subject to change. It may be
     * formally adopted in the future.
     * optional int32 delay = 5;
     *
     * Generated from protobuf field <code>int32 delay = 5;</code>
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * The current schedule deviation for the trip.  Delay should only be
     * specified when the prediction is given relative to some existing schedule
     * in GTFS.
     * Delay (in seconds) can be positive (meaning that the vehicle is late) or
     * negative (meaning that the vehicle is ahead of schedule). Delay of 0
     * means that the vehicle is exactly on time.
     * Delay information in StopTimeUpdates take precedent of trip-level delay
     * information, such that trip-level delay is only propagated until the next
     * stop along the trip with a StopTimeUpdate delay value specified.
     * Feed providers are strongly encouraged to provide a TripUpdate.timestamp
     * value indicating when the delay value was last updated, in order to
     * evaluate the freshness of the data.
     * NOTE: This field is still experimental, and subject to change. It may be
     * formally adopted in the future.
     * optional int32 delay = 5;
     *
     * Generated from protobuf field <code>int32 delay = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->delay = $var;

        return $this;
    }

}

