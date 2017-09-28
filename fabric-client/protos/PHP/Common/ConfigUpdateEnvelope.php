<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/configtx.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>common.ConfigUpdateEnvelope</code>
 */
class ConfigUpdateEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A marshaled ConfigUpdate structure
     * </pre>
     *
     * <code>bytes config_update = 1;</code>
     */
    private $config_update = '';
    /**
     * <pre>
     * Signatures over the config_update
     * </pre>
     *
     * <code>repeated .common.ConfigSignature signatures = 2;</code>
     */
    private $signatures;

    public function __construct() {
        \GPBMetadata\Common\Configtx::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A marshaled ConfigUpdate structure
     * </pre>
     *
     * <code>bytes config_update = 1;</code>
     */
    public function getConfigUpdate()
    {
        return $this->config_update;
    }

    /**
     * <pre>
     * A marshaled ConfigUpdate structure
     * </pre>
     *
     * <code>bytes config_update = 1;</code>
     */
    public function setConfigUpdate($var)
    {
        GPBUtil::checkString($var, False);
        $this->config_update = $var;
    }

    /**
     * <pre>
     * Signatures over the config_update
     * </pre>
     *
     * <code>repeated .common.ConfigSignature signatures = 2;</code>
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    /**
     * <pre>
     * Signatures over the config_update
     * </pre>
     *
     * <code>repeated .common.ConfigSignature signatures = 2;</code>
     */
    public function setSignatures(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\ConfigSignature::class);
        $this->signatures = $arr;
    }

}
