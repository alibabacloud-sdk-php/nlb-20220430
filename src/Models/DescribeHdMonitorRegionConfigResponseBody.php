<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class DescribeHdMonitorRegionConfigResponseBody extends Model
{
    /**
     * @example hdmonitor-cn-hangzhou-223794579283657556
     *
     * @var string
     */
    public $logProject;

    /**
     * @example hdmonitor-cn-hangzhou-metricStore-1
     *
     * @var string
     */
    public $metricStore;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logProject'  => 'LogProject',
        'metricStore' => 'MetricStore',
        'regionId'    => 'RegionId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->metricStore) {
            $res['MetricStore'] = $this->metricStore;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHdMonitorRegionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['MetricStore'])) {
            $model->metricStore = $map['MetricStore'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
