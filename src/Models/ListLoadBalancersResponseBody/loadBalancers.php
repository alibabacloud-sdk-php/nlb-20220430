<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\deletionProtectionConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\modificationProtectionConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\operationLocks;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\tags;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\zoneMappings;
use AlibabaCloud\Tea\Model;

class loadBalancers extends Model
{
    /**
     * @description The IP version. Valid values:
     *
     *   **ipv4**: IPv4
     *   **DualStack**: dual stack
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description The type of IPv4 address used by the NLB instance. Valid values:
     *
     *   **Internet**: The NLB instance uses a public IP address. The domain name of the NLB instance is resolved to the public IP address. Therefore, the NLB instance can be accessed over the Internet.
     *   **Intranet**: The NLB instance uses a private IP address. The domain name of the NLB instance is resolved to the private IP address. Therefore, the NLB instance can be accessed over the VPC where the NLB instance is deployed.
     *
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the EIP bandwidth plan that is associated with the NLB instance if the NLB instance uses a public IP address.
     *
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The time when the resource was created. The time is displayed in UTC in the `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example 2022-07-18T17:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether cross-zone load balancing is enabled for the NLB instance. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $crossZoneEnabled;

    /**
     * @description The domain name of the NLB instance.
     *
     * @example nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com
     *
     * @var string
     */
    public $DNSName;

    /**
     * @description The configuration of the deletion protection feature.
     *
     * @var deletionProtectionConfig
     */
    public $deletionProtectionConfig;

    /**
     * @description The type of IPv6 address used by the NLB instance. Valid values:
     *
     *   **Internet**: The NLB instance uses a public IP address. The domain name of the NLB instance is resolved to the public IP address. Therefore, the NLB instance can be accessed over the Internet.
     *   **Intranet**: The NLB instance uses a private IP address. The domain name of the NLB instance is resolved to the private IP address. Therefore, the NLB instance can be accessed over the VPC where the NLB instance is deployed.
     *
     * @example Internet
     *
     * @var string
     */
    public $ipv6AddressType;

    /**
     * @description The billing settings of the NLB instance.
     *
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description The business status of the NLB instance. Valid values:
     *
     *   **Abnormal**: The NLB instance is not working as expected.
     *   **Normal**: The NLB instance is working as expected.
     *
     * @example Normal
     *
     * @var string
     */
    public $loadBalancerBusinessStatus;

    /**
     * @description The ID of the NLB instance.
     *
     * @example nlb-83ckzc8d4xlp8o****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the NLB instance.
     *
     * @example NLB1
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The status of the NLB instance. Valid values:
     *
     *   **Inactive**: The NLB instance is disabled. Listeners of NLB instances in the Inactive state do not forward traffic.
     *   **Active**: The NLB instance is running.
     *   **Provisioning**: The NLB instance is being created.
     *   **Configuring**: The NLB instance is being modified.
     *   **Deleting**: The NLB instance is being deleted.
     *   **Deleted**: The NLB instance is deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The type of the SLB instance. Only **Network** is returned, which indicates NLB.
     *
     * @example Network
     *
     * @var string
     */
    public $loadBalancerType;

    /**
     * @description The configuration of the configuration read-only mode.
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description The configuration of the operation lock. This parameter takes effect if the value of `LoadBalancerBussinessStatus` is **Abnormal**.
     *
     * @var operationLocks[]
     */
    public $operationLocks;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security group to which the NLB instance is added.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description A list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the VPC where the NLB instance is deployed.
     *
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The mappings between zones and vSwitches.
     *
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressIpVersion'             => 'AddressIpVersion',
        'addressType'                  => 'AddressType',
        'bandwidthPackageId'           => 'BandwidthPackageId',
        'createTime'                   => 'CreateTime',
        'crossZoneEnabled'             => 'CrossZoneEnabled',
        'DNSName'                      => 'DNSName',
        'deletionProtectionConfig'     => 'DeletionProtectionConfig',
        'ipv6AddressType'              => 'Ipv6AddressType',
        'loadBalancerBillingConfig'    => 'LoadBalancerBillingConfig',
        'loadBalancerBusinessStatus'   => 'LoadBalancerBusinessStatus',
        'loadBalancerId'               => 'LoadBalancerId',
        'loadBalancerName'             => 'LoadBalancerName',
        'loadBalancerStatus'           => 'LoadBalancerStatus',
        'loadBalancerType'             => 'LoadBalancerType',
        'modificationProtectionConfig' => 'ModificationProtectionConfig',
        'operationLocks'               => 'OperationLocks',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'securityGroupIds'             => 'SecurityGroupIds',
        'tags'                         => 'Tags',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossZoneEnabled) {
            $res['CrossZoneEnabled'] = $this->crossZoneEnabled;
        }
        if (null !== $this->DNSName) {
            $res['DNSName'] = $this->DNSName;
        }
        if (null !== $this->deletionProtectionConfig) {
            $res['DeletionProtectionConfig'] = null !== $this->deletionProtectionConfig ? $this->deletionProtectionConfig->toMap() : null;
        }
        if (null !== $this->ipv6AddressType) {
            $res['Ipv6AddressType'] = $this->ipv6AddressType;
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toMap() : null;
        }
        if (null !== $this->loadBalancerBusinessStatus) {
            $res['LoadBalancerBusinessStatus'] = $this->loadBalancerBusinessStatus;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
        }
        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toMap() : null;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = [];
            if (null !== $this->operationLocks && \is_array($this->operationLocks)) {
                $n = 0;
                foreach ($this->operationLocks as $item) {
                    $res['OperationLocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossZoneEnabled'])) {
            $model->crossZoneEnabled = $map['CrossZoneEnabled'];
        }
        if (isset($map['DNSName'])) {
            $model->DNSName = $map['DNSName'];
        }
        if (isset($map['DeletionProtectionConfig'])) {
            $model->deletionProtectionConfig = deletionProtectionConfig::fromMap($map['DeletionProtectionConfig']);
        }
        if (isset($map['Ipv6AddressType'])) {
            $model->ipv6AddressType = $map['Ipv6AddressType'];
        }
        if (isset($map['LoadBalancerBillingConfig'])) {
            $model->loadBalancerBillingConfig = loadBalancerBillingConfig::fromMap($map['LoadBalancerBillingConfig']);
        }
        if (isset($map['LoadBalancerBusinessStatus'])) {
            $model->loadBalancerBusinessStatus = $map['LoadBalancerBusinessStatus'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
        }
        if (isset($map['ModificationProtectionConfig'])) {
            $model->modificationProtectionConfig = modificationProtectionConfig::fromMap($map['ModificationProtectionConfig']);
        }
        if (isset($map['OperationLocks'])) {
            if (!empty($map['OperationLocks'])) {
                $model->operationLocks = [];
                $n                     = 0;
                foreach ($map['OperationLocks'] as $item) {
                    $model->operationLocks[$n++] = null !== $item ? operationLocks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
