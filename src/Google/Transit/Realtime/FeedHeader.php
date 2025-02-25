<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto

namespace Google\Transit\Realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about a feed, included in feed messages.
 *
 * Generated from protobuf message <code>Google.Transit.Realtime.FeedHeader</code>
 */
class FeedHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * Version of the feed specification.
     * The current version is 2.0.  Valid versions are "2.0", "1.0".
     *
     * Generated from protobuf field <code>string gtfs_realtime_version = 1;</code>
     */
    protected $gtfs_realtime_version = '';
    /**
     *Incrementality incrementality = 2 [default = FULL_DATASET];
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader.Incrementality incrementality = 2;</code>
     */
    protected $incrementality = 0;
    /**
     * This timestamp identifies the moment when the content of this feed has been
     * created (in server time). In POSIX time (i.e., number of seconds since
     * January 1st 1970 00:00:00 UTC).
     *
     * Generated from protobuf field <code>uint64 timestamp = 3;</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gtfs_realtime_version
     *           Version of the feed specification.
     *           The current version is 2.0.  Valid versions are "2.0", "1.0".
     *     @type int $incrementality
     *          Incrementality incrementality = 2 [default = FULL_DATASET];
     *     @type int|string $timestamp
     *           This timestamp identifies the moment when the content of this feed has been
     *           created (in server time). In POSIX time (i.e., number of seconds since
     *           January 1st 1970 00:00:00 UTC).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Version of the feed specification.
     * The current version is 2.0.  Valid versions are "2.0", "1.0".
     *
     * Generated from protobuf field <code>string gtfs_realtime_version = 1;</code>
     * @return string
     */
    public function getGtfsRealtimeVersion()
    {
        return $this->gtfs_realtime_version;
    }

    /**
     * Version of the feed specification.
     * The current version is 2.0.  Valid versions are "2.0", "1.0".
     *
     * Generated from protobuf field <code>string gtfs_realtime_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGtfsRealtimeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->gtfs_realtime_version = $var;

        return $this;
    }

    /**
     *Incrementality incrementality = 2 [default = FULL_DATASET];
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader.Incrementality incrementality = 2;</code>
     * @return int
     */
    public function getIncrementality()
    {
        return $this->incrementality;
    }

    /**
     *Incrementality incrementality = 2 [default = FULL_DATASET];
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader.Incrementality incrementality = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIncrementality($var)
    {
        GPBUtil::checkEnum($var, \Google\Transit\Realtime\FeedHeader_Incrementality::class);
        $this->incrementality = $var;

        return $this;
    }

    /**
     * This timestamp identifies the moment when the content of this feed has been
     * created (in server time). In POSIX time (i.e., number of seconds since
     * January 1st 1970 00:00:00 UTC).
     *
     * Generated from protobuf field <code>uint64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * This timestamp identifies the moment when the content of this feed has been
     * created (in server time). In POSIX time (i.e., number of seconds since
     * January 1st 1970 00:00:00 UTC).
     *
     * Generated from protobuf field <code>uint64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

}

