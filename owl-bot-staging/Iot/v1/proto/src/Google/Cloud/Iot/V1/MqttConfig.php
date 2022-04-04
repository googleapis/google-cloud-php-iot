<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration of MQTT for a device registry.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.MqttConfig</code>
 */
class MqttConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If enabled, allows connections using the MQTT protocol. Otherwise, MQTT
     * connections to this registry will fail.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.MqttState mqtt_enabled_state = 1;</code>
     */
    protected $mqtt_enabled_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mqtt_enabled_state
     *           If enabled, allows connections using the MQTT protocol. Otherwise, MQTT
     *           connections to this registry will fail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * If enabled, allows connections using the MQTT protocol. Otherwise, MQTT
     * connections to this registry will fail.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.MqttState mqtt_enabled_state = 1;</code>
     * @return int
     */
    public function getMqttEnabledState()
    {
        return $this->mqtt_enabled_state;
    }

    /**
     * If enabled, allows connections using the MQTT protocol. Otherwise, MQTT
     * connections to this registry will fail.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.MqttState mqtt_enabled_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMqttEnabledState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iot\V1\MqttState::class);
        $this->mqtt_enabled_state = $var;

        return $this;
    }

}

