<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Dara\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string[]
     */
    public $ipv4LocalAddresses;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string[]
     */
    public $ipv6LocalAddresses;

    /**
     * @var string
     */
    public $privateIPv4Address;

    /**
     * @var string
     */
    public $privateIPv4HcStatus;

    /**
     * @var string
     */
    public $privateIPv6HcStatus;

    /**
     * @var string
     */
    public $publicIPv4Address;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'eniId' => 'EniId',
        'ipv4LocalAddresses' => 'Ipv4LocalAddresses',
        'ipv6Address' => 'Ipv6Address',
        'ipv6LocalAddresses' => 'Ipv6LocalAddresses',
        'privateIPv4Address' => 'PrivateIPv4Address',
        'privateIPv4HcStatus' => 'PrivateIPv4HcStatus',
        'privateIPv6HcStatus' => 'PrivateIPv6HcStatus',
        'publicIPv4Address' => 'PublicIPv4Address',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4LocalAddresses)) {
            Model::validateArray($this->ipv4LocalAddresses);
        }
        if (\is_array($this->ipv6LocalAddresses)) {
            Model::validateArray($this->ipv6LocalAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }

        if (null !== $this->ipv4LocalAddresses) {
            if (\is_array($this->ipv4LocalAddresses)) {
                $res['Ipv4LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv4LocalAddresses as $item1) {
                    $res['Ipv4LocalAddresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }

        if (null !== $this->ipv6LocalAddresses) {
            if (\is_array($this->ipv6LocalAddresses)) {
                $res['Ipv6LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv6LocalAddresses as $item1) {
                    $res['Ipv6LocalAddresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->privateIPv4Address) {
            $res['PrivateIPv4Address'] = $this->privateIPv4Address;
        }

        if (null !== $this->privateIPv4HcStatus) {
            $res['PrivateIPv4HcStatus'] = $this->privateIPv4HcStatus;
        }

        if (null !== $this->privateIPv6HcStatus) {
            $res['PrivateIPv6HcStatus'] = $this->privateIPv6HcStatus;
        }

        if (null !== $this->publicIPv4Address) {
            $res['PublicIPv4Address'] = $this->publicIPv4Address;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }

        if (isset($map['Ipv4LocalAddresses'])) {
            if (!empty($map['Ipv4LocalAddresses'])) {
                $model->ipv4LocalAddresses = [];
                $n1 = 0;
                foreach ($map['Ipv4LocalAddresses'] as $item1) {
                    $model->ipv4LocalAddresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        if (isset($map['Ipv6LocalAddresses'])) {
            if (!empty($map['Ipv6LocalAddresses'])) {
                $model->ipv6LocalAddresses = [];
                $n1 = 0;
                foreach ($map['Ipv6LocalAddresses'] as $item1) {
                    $model->ipv6LocalAddresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PrivateIPv4Address'])) {
            $model->privateIPv4Address = $map['PrivateIPv4Address'];
        }

        if (isset($map['PrivateIPv4HcStatus'])) {
            $model->privateIPv4HcStatus = $map['PrivateIPv4HcStatus'];
        }

        if (isset($map['PrivateIPv6HcStatus'])) {
            $model->privateIPv6HcStatus = $map['PrivateIPv6HcStatus'];
        }

        if (isset($map['PublicIPv4Address'])) {
            $model->publicIPv4Address = $map['PublicIPv4Address'];
        }

        return $model;
    }
}
