<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeFcFunctionRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'limit'       => 'Limit',
        'nextToken'   => 'NextToken',
        'operaUid'    => 'OperaUid',
        'prefix'      => 'Prefix',
        'regionCode'  => 'RegionCode',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFcFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
