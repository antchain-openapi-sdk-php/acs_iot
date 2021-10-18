<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\ACS_IOT\Models;

use AlibabaCloud\Tea\Model;

class CollectContentNoSign extends Model
{
    // 链上设备Id
    //
    /**
     * @example 12321321
     *
     * @var string
     */
    public $chainDeviceId;

    // 收集内容
    /**
     * @example {"name","1"}
     *
     * @var string
     */
    public $content;

    // 服务端发送的扩展数据（非可信设备直接产生的数据）
    /**
     * @example {"extraKey":"extraValue"}
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'chainDeviceId' => 'chain_device_id',
        'content'       => 'content',
        'extraData'     => 'extra_data',
    ];

    public function validate()
    {
        Model::validateRequired('chainDeviceId', $this->chainDeviceId, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainDeviceId) {
            $res['chain_device_id'] = $this->chainDeviceId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->extraData) {
            $res['extra_data'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CollectContentNoSign
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chain_device_id'])) {
            $model->chainDeviceId = $map['chain_device_id'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['extra_data'])) {
            $model->extraData = $map['extra_data'];
        }

        return $model;
    }
}
