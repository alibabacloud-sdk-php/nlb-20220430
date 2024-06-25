<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupServersAttributeRequest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The description of the backend server.
     *
     * The description must be 2 to 256 characters in length, and can contain letters, digits, commas (,), periods (.), semicolons (;), forward slashes (/), at signs (@), underscores (_), and hyphens (-).
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**. You can specify at most 40 backend servers in each call.
     *
     * This parameter is required.
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The backend server ID. You can specify at most 40 backend servers in each call.
     *
     *   If the server group type is **Instance**, set the ServerId parameter to the ID of an Elastic Compute Service (ECS) instance, an elastic network interface (ENI), or an elastic container instance. These backend servers are specified by **Ecs**, **Eni**, or **Eci**.
     *   If the server group type is **Ip**, set this parameter to an IP address.
     *
     * This parameter is required.
     * @example ecs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the backend server. If the server group type is **Ip**, you must specify an IP address.
     *
     * > You can specify at most 40 backend servers in each call.
     * @example 192.168.6.6
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **Ecs**: ECS instance
     *   **Eni**: ENI
     *   **Eci**: an elastic container instance
     *   **Ip**: an IP address
     *
     * This parameter is required.
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The weight of the backend server. Valid values: **0** to **100**. Default value: **100**. If the weight of a backend server is set to **0**, no requests are forwarded to the backend server.
     *
     * > You can specify at most 40 backend servers in each call.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description' => 'Description',
        'port'        => 'Port',
        'serverId'    => 'ServerId',
        'serverIp'    => 'ServerIp',
        'serverType'  => 'ServerType',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
