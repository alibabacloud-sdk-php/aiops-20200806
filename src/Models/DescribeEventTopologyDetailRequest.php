<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventTopologyDetailRequest extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $tagId;
    protected $_name = [
        'eventId'  => 'EventId',
        'operaUid' => 'OperaUid',
        'tagId'    => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTopologyDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
