<?php

namespace App\Consts\Offer;

class OfferCondition
{
    const LIST = [
        100, // 新品未使用
        200, // 美中古・未使用に近い
        300, // 目立った傷、汚れなし
        400, // 状態は問わない
    ];

    const DESCRIPTION = "商品の状態 100: 新品未使用, 200: 美中古・未使用に近い, 300: 目立った傷、汚れなし, 400: 状態は問わない";
}
