<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto

namespace Google\Transit\Realtime\TripDescriptor;

use UnexpectedValueException;

/**
 * The relation between this trip and the static schedule. If a trip is done
 * in accordance with temporary schedule, not reflected in GTFS, then it
 * shouldn't be marked as SCHEDULED, but likely as ADDED.
 *
 * Protobuf type <code>Google.Transit.Realtime.TripDescriptor.ScheduleRelationship</code>
 */
class ScheduleRelationship
{
    /**
     * Trip that is running in accordance with its GTFS schedule, or is close
     * enough to the scheduled trip to be associated with it.
     *
     * Generated from protobuf enum <code>SCHEDULED = 0;</code>
     */
    const SCHEDULED = 0;
    /**
     * An extra trip that was added in addition to a running schedule, for
     * example, to replace a broken vehicle or to respond to sudden passenger
     * load.
     * NOTE: Currently, behavior is unspecified for feeds that use this mode. There are discussions on the GTFS GitHub
     * [(1)](https://github.com/google/transit/issues/106) [(2)](https://github.com/google/transit/pull/221)
     * [(3)](https://github.com/google/transit/pull/219) around fully specifying or deprecating ADDED trips and the
     * documentation will be updated when those discussions are finalized.
     *
     * Generated from protobuf enum <code>ADDED = 1;</code>
     */
    const ADDED = 1;
    /**
     * A trip that is running with no schedule associated to it (GTFS frequencies.txt exact_times=0).
     * Trips with ScheduleRelationship=UNSCHEDULED must also set all StopTimeUpdates.ScheduleRelationship=UNSCHEDULED.
     *
     * Generated from protobuf enum <code>UNSCHEDULED = 2;</code>
     */
    const UNSCHEDULED = 2;
    /**
     * A trip that existed in the schedule but was removed.
     *
     * Generated from protobuf enum <code>CANCELED = 3;</code>
     */
    const CANCELED = 3;
    /**
     * Should not be used - for backwards-compatibility only.
     *
     * Generated from protobuf enum <code>REPLACEMENT = 5 [deprecated = true];</code>
     */
    const REPLACEMENT = 5;
    /**
     * An extra trip that was added in addition to a running schedule, for example, to replace a broken vehicle or to
     * respond to sudden passenger load. Used with TripUpdate.TripProperties.trip_id, TripUpdate.TripProperties.start_date,
     * and TripUpdate.TripProperties.start_time to copy an existing trip from static GTFS but start at a different service
     * date and/or time. Duplicating a trip is allowed if the service related to the original trip in (CSV) GTFS
     * (in calendar.txt or calendar_dates.txt) is operating within the next 30 days. The trip to be duplicated is
     * identified via TripUpdate.TripDescriptor.trip_id. This enumeration does not modify the existing trip referenced by
     * TripUpdate.TripDescriptor.trip_id - if a producer wants to cancel the original trip, it must publish a separate
     * TripUpdate with the value of CANCELED or DELETED. Trips defined in GTFS frequencies.txt with exact_times that is
     * empty or equal to 0 cannot be duplicated. The VehiclePosition.TripDescriptor.trip_id for the new trip must contain
     * the matching value from TripUpdate.TripProperties.trip_id and VehiclePosition.TripDescriptor.ScheduleRelationship
     * must also be set to DUPLICATED.
     * Existing producers and consumers that were using the ADDED enumeration to represent duplicated trips must follow
     * the migration guide (https://github.com/google/transit/tree/master/gtfs-realtime/spec/en/examples/migration-duplicated.md)
     * to transition to the DUPLICATED enumeration.
     * NOTE: This field is still experimental, and subject to change. It may be formally adopted in the future.
     *
     * Generated from protobuf enum <code>DUPLICATED = 6;</code>
     */
    const DUPLICATED = 6;
    /**
     * A trip that existed in the schedule but was removed and must not be shown to users.
     * DELETED should be used instead of CANCELED to indicate that a transit provider would like to entirely remove
     * information about the corresponding trip from consuming applications, so the trip is not shown as cancelled to
     * riders, e.g. a trip that is entirely being replaced by another trip.
     * This designation becomes particularly important if several trips are cancelled and replaced with substitute service.
     * If consumers were to show explicit information about the cancellations it would distract from the more important
     * real-time predictions.
     * NOTE: This field is still experimental, and subject to change. It may be formally adopted in the future.
     *
     * Generated from protobuf enum <code>DELETED = 7;</code>
     */
    const DELETED = 7;

    private static $valueToName = [
        self::SCHEDULED => 'SCHEDULED',
        self::ADDED => 'ADDED',
        self::UNSCHEDULED => 'UNSCHEDULED',
        self::CANCELED => 'CANCELED',
        self::REPLACEMENT => 'REPLACEMENT',
        self::DUPLICATED => 'DUPLICATED',
        self::DELETED => 'DELETED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScheduleRelationship::class, \Google\Transit\Realtime\TripDescriptor_ScheduleRelationship::class);

