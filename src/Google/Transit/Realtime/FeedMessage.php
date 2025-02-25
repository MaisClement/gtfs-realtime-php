<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto

namespace Google\Transit\Realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The contents of a feed message.
 * A feed is a continuous stream of feed messages. Each message in the stream is
 * obtained as a response to an appropriate HTTP GET request.
 * A realtime feed is always defined with relation to an existing GTFS feed.
 * All the entity ids are resolved with respect to the GTFS feed.
 * Note that "required" and "optional" as stated in this file refer to Protocol
 * Buffer cardinality, not semantic cardinality.  See reference.md at
 * https://github.com/google/transit/tree/master/gtfs-realtime for field
 * semantic cardinality.
 *
 * Generated from protobuf message <code>Google.Transit.Realtime.FeedMessage</code>
 */
class FeedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata about this feed and feed message.
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader header = 1;</code>
     */
    protected $header = null;
    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.FeedEntity entity = 2;</code>
     */
    private $entity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Transit\Realtime\FeedHeader $header
     *           Metadata about this feed and feed message.
     *     @type \Google\Transit\Realtime\FeedEntity[]|\Google\Protobuf\Internal\RepeatedField $entity
     *           Contents of the feed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata about this feed and feed message.
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader header = 1;</code>
     * @return \Google\Transit\Realtime\FeedHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Metadata about this feed and feed message.
     *
     * Generated from protobuf field <code>.Google.Transit.Realtime.FeedHeader header = 1;</code>
     * @param \Google\Transit\Realtime\FeedHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Transit\Realtime\FeedHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.FeedEntity entity = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.FeedEntity entity = 2;</code>
     * @param \Google\Transit\Realtime\FeedEntity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntity($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Transit\Realtime\FeedEntity::class);
        $this->entity = $arr;

        return $this;
    }

}

