<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/chaincode_shim.proto

namespace Hyperledger\Fabric\Protos\Peer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protos.ChaincodeMessage</code>
 */
class ChaincodeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protos.ChaincodeMessage.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     */
    private $timestamp = null;
    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     */
    private $payload = '';
    /**
     * Generated from protobuf field <code>string txid = 4;</code>
     */
    private $txid = '';
    /**
     * Generated from protobuf field <code>.protos.SignedProposal proposal = 5;</code>
     */
    private $proposal = null;
    /**
     *event emmited by chaincode. Used only with Init or Invoke.
     * This event is then stored (currently)
     *with Block.NonHashData.TransactionResult
     *
     * Generated from protobuf field <code>.protos.ChaincodeEvent chaincode_event = 6;</code>
     */
    private $chaincode_event = null;

    public function __construct() {
        \GPBMetadata\Peer\ChaincodeShim::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protos.ChaincodeMessage.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.protos.ChaincodeMessage.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Hyperledger\Fabric\Protos\Peer\ChaincodeMessage_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string txid = 4;</code>
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * Generated from protobuf field <code>string txid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->txid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protos.SignedProposal proposal = 5;</code>
     * @return \Hyperledger\Fabric\Protos\Peer\SignedProposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * Generated from protobuf field <code>.protos.SignedProposal proposal = 5;</code>
     * @param \Hyperledger\Fabric\Protos\Peer\SignedProposal $var
     * @return $this
     */
    public function setProposal($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Peer\SignedProposal::class);
        $this->proposal = $var;

        return $this;
    }

    /**
     *event emmited by chaincode. Used only with Init or Invoke.
     * This event is then stored (currently)
     *with Block.NonHashData.TransactionResult
     *
     * Generated from protobuf field <code>.protos.ChaincodeEvent chaincode_event = 6;</code>
     * @return \Hyperledger\Fabric\Protos\Peer\ChaincodeEvent
     */
    public function getChaincodeEvent()
    {
        return $this->chaincode_event;
    }

    /**
     *event emmited by chaincode. Used only with Init or Invoke.
     * This event is then stored (currently)
     *with Block.NonHashData.TransactionResult
     *
     * Generated from protobuf field <code>.protos.ChaincodeEvent chaincode_event = 6;</code>
     * @param \Hyperledger\Fabric\Protos\Peer\ChaincodeEvent $var
     * @return $this
     */
    public function setChaincodeEvent($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Peer\ChaincodeEvent::class);
        $this->chaincode_event = $var;

        return $this;
    }

}
