<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以回档时间范围
 *
 * @method string getAvailableBeginTime() 获取可回档起始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setAvailableBeginTime(string $AvailableBeginTime) 设置可回档起始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method string getAvailableEndTime() 获取可回档结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setAvailableEndTime(string $AvailableEndTime) 设置可回档结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 */
class AvailableRecoveryTimeRange extends AbstractModel
{
    /**
     * @var string 可回档起始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $AvailableBeginTime;

    /**
     * @var string 可回档结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $AvailableEndTime;

    /**
     * @param string $AvailableBeginTime 可回档起始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param string $AvailableEndTime 可回档结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailableBeginTime",$param) and $param["AvailableBeginTime"] !== null) {
            $this->AvailableBeginTime = $param["AvailableBeginTime"];
        }

        if (array_key_exists("AvailableEndTime",$param) and $param["AvailableEndTime"] !== null) {
            $this->AvailableEndTime = $param["AvailableEndTime"];
        }
    }
}
