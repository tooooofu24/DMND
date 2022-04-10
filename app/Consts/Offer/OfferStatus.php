<?php

namespace App\Consts\Offer;

class OfferStatus
{
    const LIST = [
        0, // 売り手なし
        100, // 売り手がDEALした
        200, // 買い手がDEAL承諾した
        300, // 買い手が支払いした
        400, // 売り手が発送通知した
        500, // 買い手が受取通知した

    ];

    const DESCRIPTION = '商品の販売、購入ステータス 0: 売り手なし, 100: 売り手がDEALした, 200: 買い手がDEAL承諾した, 300: 買い手が支払いした, 400: 売り手が発送通知した, 500: 買い手が受取通知した';
}