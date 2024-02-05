<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto

namespace Google\Transit\Realtime\Alert;

use UnexpectedValueException;

/**
 * What is the effect of this problem on the affected entity. If effect_detail is included, then Effect must also be included.
 *
 * Protobuf type <code>Google.Transit.Realtime.Alert.Effect</code>
 */
class Effect
{
    /**
     * Generated from protobuf enum <code>PROTO3_DEFAULT_EFFECT = 0;</code>
     */
    const PROTO3_DEFAULT_EFFECT = 0;
    /**
     * Generated from protobuf enum <code>NO_SERVICE = 1;</code>
     */
    const NO_SERVICE = 1;
    /**
     * Generated from protobuf enum <code>REDUCED_SERVICE = 2;</code>
     */
    const REDUCED_SERVICE = 2;
    /**
     * We don't care about INsignificant delays: they are hard to detect, have
     * little impact on the user, and would clutter the results as they are too
     * frequent.
     *
     * Generated from protobuf enum <code>SIGNIFICANT_DELAYS = 3;</code>
     */
    const SIGNIFICANT_DELAYS = 3;
    /**
     * Generated from protobuf enum <code>DETOUR = 4;</code>
     */
    const DETOUR = 4;
    /**
     * Generated from protobuf enum <code>ADDITIONAL_SERVICE = 5;</code>
     */
    const ADDITIONAL_SERVICE = 5;
    /**
     * Generated from protobuf enum <code>MODIFIED_SERVICE = 6;</code>
     */
    const MODIFIED_SERVICE = 6;
    /**
     * Generated from protobuf enum <code>OTHER_EFFECT = 7;</code>
     */
    const OTHER_EFFECT = 7;
    /**
     * Generated from protobuf enum <code>UNKNOWN_EFFECT = 8;</code>
     */
    const UNKNOWN_EFFECT = 8;
    /**
     * Generated from protobuf enum <code>STOP_MOVED = 9;</code>
     */
    const STOP_MOVED = 9;
    /**
     * Generated from protobuf enum <code>NO_EFFECT = 10;</code>
     */
    const NO_EFFECT = 10;
    /**
     * Generated from protobuf enum <code>ACCESSIBILITY_ISSUE = 11;</code>
     */
    const ACCESSIBILITY_ISSUE = 11;

    private static $valueToName = [
        self::PROTO3_DEFAULT_EFFECT => 'PROTO3_DEFAULT_EFFECT',
        self::NO_SERVICE => 'NO_SERVICE',
        self::REDUCED_SERVICE => 'REDUCED_SERVICE',
        self::SIGNIFICANT_DELAYS => 'SIGNIFICANT_DELAYS',
        self::DETOUR => 'DETOUR',
        self::ADDITIONAL_SERVICE => 'ADDITIONAL_SERVICE',
        self::MODIFIED_SERVICE => 'MODIFIED_SERVICE',
        self::OTHER_EFFECT => 'OTHER_EFFECT',
        self::UNKNOWN_EFFECT => 'UNKNOWN_EFFECT',
        self::STOP_MOVED => 'STOP_MOVED',
        self::NO_EFFECT => 'NO_EFFECT',
        self::ACCESSIBILITY_ISSUE => 'ACCESSIBILITY_ISSUE',
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
class_alias(Effect::class, \Google\Transit\Realtime\Alert_Effect::class);

