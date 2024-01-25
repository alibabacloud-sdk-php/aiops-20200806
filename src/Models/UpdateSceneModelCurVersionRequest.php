<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateSceneModelCurVersionRequest extends Model
{
    /**
     * @var int
     */
    public $extId;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'extId'    => 'ExtId',
        'modelId'  => 'ModelId',
        'operaUid' => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extId) {
            $res['ExtId'] = $this->extId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSceneModelCurVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtId'])) {
            $model->extId = $map['ExtId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
