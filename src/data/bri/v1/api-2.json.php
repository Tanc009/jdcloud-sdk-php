<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'bri',
        'protocol' => 'json',
//        'serviceFullName' => 'bri',
//        'serviceId' => 'bri',
    ],
    'operations' => [
        'DescribeBWList' => [
            'name' => 'DescribeBWList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DescribeBWListRequestShape', ],
            'output' => [ 'shape' => 'DescribeBWListResponseShape', ],
        ],
        'SetBWList' => [
            'name' => 'SetBWList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'SetBWListRequestShape', ],
            'output' => [ 'shape' => 'SetBWListResponseShape', ],
        ],
        'DelBWList' => [
            'name' => 'DelBWList',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/blackwhite:list',
            ],
            'input' => [ 'shape' => 'DelBWListRequestShape', ],
            'output' => [ 'shape' => 'DelBWListResponseShape', ],
        ],
        'CreditScore' => [
            'name' => 'CreditScore',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/creditScore:check',
            ],
            'input' => [ 'shape' => 'CreditScoreRequestShape', ],
            'output' => [ 'shape' => 'CreditScoreResponseShape', ],
        ],
    ],
    'shapes' => [
        'OrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'needSpiderIp' => [ 'type' => 'boolean', 'locationName' => 'needSpiderIp', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'GetPriceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'needSpiderIp' => [ 'type' => 'boolean', 'locationName' => 'needSpiderIp', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'BwcfgSet' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'item' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bwcfg', ], ],
            ],
        ],
        'Bwcfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'bwType' => [ 'type' => 'string', 'locationName' => 'bwType', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditTask' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditTaskLogin' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' =>  [ 'shape' => 'CreditTaskLoginDetail', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditScoreDetail' => [
            'type' => 'structure',
            'members' => [
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
                'riskCode' => [ 'type' => 'string', 'locationName' => 'riskCode', ],
                'riskClass' => [ 'type' => 'string', 'locationName' => 'riskClass', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'scoreDesc' => [ 'type' => 'string', 'locationName' => 'scoreDesc', ],
                'attribution' => [ 'type' => 'string', 'locationName' => 'attribution', ],
            ],
        ],
        'CreditTaskSignUpDetail' => [
            'type' => 'structure',
            'members' => [
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regEmail' => [ 'type' => 'string', 'locationName' => 'regEmail', ],
                'regName' => [ 'type' => 'string', 'locationName' => 'regName', ],
                'regType' => [ 'type' => 'integer', 'locationName' => 'regType', ],
                'channel' => [ 'type' => 'integer', 'locationName' => 'channel', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'elapsedTime' => [ 'type' => 'string', 'locationName' => 'elapsedTime', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'imei' => [ 'type' => 'string', 'locationName' => 'imei', ],
                'idfa' => [ 'type' => 'string', 'locationName' => 'idfa', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'regResult' => [ 'type' => 'integer', 'locationName' => 'regResult', ],
            ],
        ],
        'CreditTaskLoginDetail' => [
            'type' => 'structure',
            'members' => [
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'loginIp' => [ 'type' => 'string', 'locationName' => 'loginIp', ],
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'loginName' => [ 'type' => 'string', 'locationName' => 'loginName', ],
                'channel' => [ 'type' => 'integer', 'locationName' => 'channel', ],
                'deviceName' => [ 'type' => 'string', 'locationName' => 'deviceName', ],
                'deviceVersion' => [ 'type' => 'string', 'locationName' => 'deviceVersion', ],
                'deviceOS' => [ 'type' => 'string', 'locationName' => 'deviceOS', ],
                'deviceOSVersion' => [ 'type' => 'string', 'locationName' => 'deviceOSVersion', ],
                'loginTime' => [ 'type' => 'long', 'locationName' => 'loginTime', ],
                'elapsedTime' => [ 'type' => 'string', 'locationName' => 'elapsedTime', ],
                'loginResult' => [ 'type' => 'string', 'locationName' => 'loginResult', ],
                'loginEmail' => [ 'type' => 'string', 'locationName' => 'loginEmail', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'imei' => [ 'type' => 'string', 'locationName' => 'imei', ],
                'idfa' => [ 'type' => 'string', 'locationName' => 'idfa', ],
                'regIp' => [ 'type' => 'string', 'locationName' => 'regIp', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'regTime' => [ 'type' => 'integer', 'locationName' => 'regTime', ],
                'bizType' => [ 'type' => 'string', 'locationName' => 'bizType', ],
                'authType' => [ 'type' => 'string', 'locationName' => 'authType', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'mobileBrand' => [ 'type' => 'string', 'locationName' => 'mobileBrand', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'mouseClickCount' => [ 'type' => 'integer', 'locationName' => 'mouseClickCount', ],
                'keyboardClickCount' => [ 'type' => 'integer', 'locationName' => 'keyboardClickCount', ],
                'referer' => [ 'type' => 'string', 'locationName' => 'referer', ],
                'jumpUrl' => [ 'type' => 'string', 'locationName' => 'jumpUrl', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'xForwardedFor' => [ 'type' => 'string', 'locationName' => 'xForwardedFor', ],
            ],
        ],
        'CreditTaskSignUp' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' =>  [ 'shape' => 'CreditTaskSignUpDetail', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreditTaskMarketingDetail' => [
            'type' => 'structure',
            'members' => [
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
                'channel' => [ 'type' => 'integer', 'locationName' => 'channel', ],
                'referUrlLower' => [ 'type' => 'string', 'locationName' => 'referUrlLower', ],
                'loginType' => [ 'type' => 'integer', 'locationName' => 'loginType', ],
                'lastLoginTime' => [ 'type' => 'long', 'locationName' => 'lastLoginTime', ],
                'regTime' => [ 'type' => 'integer', 'locationName' => 'regTime', ],
                'regIp' => [ 'type' => 'string', 'locationName' => 'regIp', ],
                'regType' => [ 'type' => 'integer', 'locationName' => 'regType', ],
                'regName' => [ 'type' => 'string', 'locationName' => 'regName', ],
                'regChannel' => [ 'type' => 'integer', 'locationName' => 'regChannel', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'eid' => [ 'type' => 'string', 'locationName' => 'eid', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vendorId' => [ 'type' => 'string', 'locationName' => 'vendorId', ],
                'imei' => [ 'type' => 'string', 'locationName' => 'imei', ],
                'idfa' => [ 'type' => 'string', 'locationName' => 'idfa', ],
                'appVersion' => [ 'type' => 'string', 'locationName' => 'appVersion', ],
                'businessId' => [ 'type' => 'integer', 'locationName' => 'businessId', ],
                'newPersonType' => [ 'type' => 'integer', 'locationName' => 'newPersonType', ],
                'batchId' => [ 'type' => 'string', 'locationName' => 'batchId', ],
                'activityKeyRaw' => [ 'type' => 'string', 'locationName' => 'activityKeyRaw', ],
                'source' => [ 'type' => 'integer', 'locationName' => 'source', ],
                'cookieHash' => [ 'type' => 'string', 'locationName' => 'cookieHash', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'userAgent' => [ 'type' => 'string', 'locationName' => 'userAgent', ],
                'xForwardedFor' => [ 'type' => 'string', 'locationName' => 'xForwardedFor', ],
                'mouseClickCount' => [ 'type' => 'integer', 'locationName' => 'mouseClickCount', ],
                'keyboardClickCount' => [ 'type' => 'integer', 'locationName' => 'keyboardClickCount', ],
                'loginSpend' => [ 'type' => 'integer', 'locationName' => 'loginSpend', ],
                'lastLoginEid' => [ 'type' => 'string', 'locationName' => 'lastLoginEid', ],
                'jumpUrl' => [ 'type' => 'string', 'locationName' => 'jumpUrl', ],
                'elapsedTime' => [ 'type' => 'string', 'locationName' => 'elapsedTime', ],
                'regResult' => [ 'type' => 'integer', 'locationName' => 'regResult', ],
                'regEmail' => [ 'type' => 'string', 'locationName' => 'regEmail', ],
                'share' => [ 'type' => 'integer', 'locationName' => 'share', ],
                'dayTimes' => [ 'type' => 'integer', 'locationName' => 'dayTimes', ],
                'totalTimes' => [ 'type' => 'integer', 'locationName' => 'totalTimes', ],
                'atitude' => [ 'type' => 'float64', 'locationName' => 'atitude', ],
                'longitude' => [ 'type' => 'float64', 'locationName' => 'longitude', ],
            ],
        ],
        'CreditTaskMarketing' => [
            'type' => 'structure',
            'members' => [
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'content' =>  [ 'shape' => 'CreditTaskMarketingDetail', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
            ],
        ],
        'WhitePinItem' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'isPaidUser' => [ 'type' => 'integer', 'locationName' => 'isPaidUser', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'phone' => [ 'type' => 'integer', 'locationName' => 'phone', ],
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'addr' => [ 'type' => 'integer', 'locationName' => 'addr', ],
                'signup' => [ 'type' => 'integer', 'locationName' => 'signup', ],
                'login' => [ 'type' => 'integer', 'locationName' => 'login', ],
                'marketing' => [ 'type' => 'integer', 'locationName' => 'marketing', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
            ],
        ],
        'Data' => [
            'type' => 'structure',
            'members' => [
                'paidUsersNumber' => [ 'type' => 'integer', 'locationName' => 'paidUsersNumber', ],
                'freeUsersNumber' => [ 'type' => 'integer', 'locationName' => 'freeUsersNumber', ],
                'invalidUsersNumber' => [ 'type' => 'integer', 'locationName' => 'invalidUsersNumber', ],
                'totalResourcePack' => [ 'type' => 'integer', 'locationName' => 'totalResourcePack', ],
                'validResourcePack' => [ 'type' => 'integer', 'locationName' => 'validResourcePack', ],
                'expireResourcePack' => [ 'type' => 'integer', 'locationName' => 'expireResourcePack', ],
                'totalOrder' => [ 'type' => 'double', 'locationName' => 'totalOrder', ],
                'totalIncome' => [ 'type' => 'double', 'locationName' => 'totalIncome', ],
            ],
        ],
        'WhitePinReq' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'whitePinItem' =>  [ 'shape' => 'WhitePinItem', ],
            ],
        ],
        'NewIncUsers' => [
            'type' => 'structure',
            'members' => [
                'freeUsers' => [ 'type' => 'integer', 'locationName' => 'freeUsers', ],
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'ValidUsersTotal' => [
            'type' => 'structure',
            'members' => [
                'freeUsers' => [ 'type' => 'integer', 'locationName' => 'freeUsers', ],
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'WhitePinList' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'isPaidUser' => [ 'type' => 'integer', 'locationName' => 'isPaidUser', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'integer', 'locationName' => 'endTime', ],
                'phone' => [ 'type' => 'integer', 'locationName' => 'phone', ],
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'addr' => [ 'type' => 'integer', 'locationName' => 'addr', ],
                'signup' => [ 'type' => 'integer', 'locationName' => 'signup', ],
                'login' => [ 'type' => 'integer', 'locationName' => 'login', ],
                'marketing' => [ 'type' => 'integer', 'locationName' => 'marketing', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'clientType' => [ 'type' => 'string', 'locationName' => 'clientType', ],
            ],
        ],
        'PkgOrderDetailObject' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'specs' => [ 'type' => 'string', 'locationName' => 'specs', ],
                'payType' => [ 'type' => 'string', 'locationName' => 'payType', ],
                'payTime' => [ 'type' => 'string', 'locationName' => 'payTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'totalFee' => [ 'type' => 'double', 'locationName' => 'totalFee', ],
                'favorableFee' => [ 'type' => 'double', 'locationName' => 'favorableFee', ],
                'balanceFee' => [ 'type' => 'double', 'locationName' => 'balanceFee', ],
                'actualFee' => [ 'type' => 'double', 'locationName' => 'actualFee', ],
            ],
        ],
        'GetUserInfoReq' => [
            'type' => 'structure',
            'members' => [
                'following' => [ 'type' => 'string', 'locationName' => 'following', ],
            ],
        ],
        'PinCodeList' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'customerCode' => [ 'type' => 'string', 'locationName' => 'customerCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'signupStgyCode' => [ 'type' => 'string', 'locationName' => 'signupStgyCode', ],
                'loginStgyCode' => [ 'type' => 'string', 'locationName' => 'loginStgyCode', ],
                'marketingStgyCode' => [ 'type' => 'string', 'locationName' => 'marketingStgyCode', ],
                'signupJsfCode' => [ 'type' => 'string', 'locationName' => 'signupJsfCode', ],
                'loginJsfCode' => [ 'type' => 'string', 'locationName' => 'loginJsfCode', ],
                'marketingJsfCode' => [ 'type' => 'string', 'locationName' => 'marketingJsfCode', ],
            ],
        ],
        'UserInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'balanceAmount' => [ 'type' => 'integer', 'locationName' => 'balanceAmount', ],
                'totalCallAmount' => [ 'type' => 'integer', 'locationName' => 'totalCallAmount', ],
                'totalBuyAmount' => [ 'type' => 'integer', 'locationName' => 'totalBuyAmount', ],
                'resourceAmount' => [ 'type' => 'integer', 'locationName' => 'resourceAmount', ],
                'following' => [ 'type' => 'string', 'locationName' => 'following', ],
            ],
        ],
        'CallDataDetail' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'addr' => [ 'type' => 'integer', 'locationName' => 'addr', ],
                'eid' => [ 'type' => 'integer', 'locationName' => 'eid', ],
                'phone' => [ 'type' => 'integer', 'locationName' => 'phone', ],
                'pin' => [ 'type' => 'integer', 'locationName' => 'pin', ],
                'card' => [ 'type' => 'integer', 'locationName' => 'card', ],
            ],
        ],
        'CallDataStatistic' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'detail' =>  [ 'shape' => 'CallDataDetail', ],
            ],
        ],
        'InvalidUsersTotal' => [
            'type' => 'structure',
            'members' => [
                'freeUsers' => [ 'type' => 'integer', 'locationName' => 'freeUsers', ],
                'paidUsers' => [ 'type' => 'integer', 'locationName' => 'paidUsers', ],
            ],
        ],
        'SetPinCode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'customerCode' => [ 'type' => 'string', 'locationName' => 'customerCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'signupStgyCode' => [ 'type' => 'string', 'locationName' => 'signupStgyCode', ],
                'loginStgyCode' => [ 'type' => 'string', 'locationName' => 'loginStgyCode', ],
                'marketingStgyCode' => [ 'type' => 'string', 'locationName' => 'marketingStgyCode', ],
                'signupJsfCode' => [ 'type' => 'string', 'locationName' => 'signupJsfCode', ],
                'loginJsfCode' => [ 'type' => 'string', 'locationName' => 'loginJsfCode', ],
                'marketingJsfCode' => [ 'type' => 'string', 'locationName' => 'marketingJsfCode', ],
            ],
        ],
        'OrderInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'validity' => [ 'type' => 'string', 'locationName' => 'validity', ],
                'specs' => [ 'type' => 'string', 'locationName' => 'specs', ],
                'quantity' => [ 'type' => 'integer', 'locationName' => 'quantity', ],
                'totalFee' => [ 'type' => 'string', 'locationName' => 'totalFee', ],
                'payTime' => [ 'type' => 'string', 'locationName' => 'payTime', ],
            ],
        ],
        'PackInfo' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'string', 'locationName' => 'packageType', ],
                'from' => [ 'type' => 'integer', 'locationName' => 'from', ],
                'totalAmount' => [ 'type' => 'string', 'locationName' => 'totalAmount', ],
                'balanceAmount' => [ 'type' => 'string', 'locationName' => 'balanceAmount', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'packId' => [ 'type' => 'string', 'locationName' => 'packId', ],
                'needSpiderIp' => [ 'type' => 'boolean', 'locationName' => 'needSpiderIp', ],
                'qpsLimit' => [ 'type' => 'integer', 'locationName' => 'qpsLimit', ],
                'version' => [ 'type' => 'integer', 'locationName' => 'version', ],
            ],
        ],
        'ApplicationInfo' => [
            'type' => 'structure',
            'members' => [
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
            ],
        ],
        'DataStatement' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'data' =>  [ 'shape' => 'DataOverview', ],
            ],
        ],
        'ResourceDataOverview' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'consume' => [ 'type' => 'integer', 'locationName' => 'consume', ],
                'detail' =>  [ 'shape' => 'ResourceDetail', ],
            ],
        ],
        'ResourceDetail' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'addr' => [ 'type' => 'integer', 'locationName' => 'addr', ],
                'eid' => [ 'type' => 'integer', 'locationName' => 'eid', ],
                'phone' => [ 'type' => 'integer', 'locationName' => 'phone', ],
                'pin' => [ 'type' => 'integer', 'locationName' => 'pin', ],
                'card' => [ 'type' => 'integer', 'locationName' => 'card', ],
            ],
        ],
        'DataOverview' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'consume' => [ 'type' => 'integer', 'locationName' => 'consume', ],
                'detail' =>  [ 'shape' => 'RiskDetail', ],
            ],
        ],
        'RiskDetail' => [
            'type' => 'structure',
            'members' => [
                'meRisk' => [ 'type' => 'integer', 'locationName' => 'meRisk', ],
                'lowRisk' => [ 'type' => 'integer', 'locationName' => 'lowRisk', ],
                'medLoRisk' => [ 'type' => 'integer', 'locationName' => 'medLoRisk', ],
                'medHiRisk' => [ 'type' => 'integer', 'locationName' => 'medHiRisk', ],
                'hiRisk' => [ 'type' => 'integer', 'locationName' => 'hiRisk', ],
                'unknown' => [ 'type' => 'integer', 'locationName' => 'unknown', ],
            ],
        ],
        'AmountStatistics' => [
            'type' => 'structure',
            'members' => [
                'free' => [ 'type' => 'integer', 'locationName' => 'free', ],
                'charge' => [ 'type' => 'integer', 'locationName' => 'charge', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'UserDetail' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'usedAmount' => [ 'type' => 'double', 'locationName' => 'usedAmount', ],
                'packagesAmount' => [ 'type' => 'integer', 'locationName' => 'packagesAmount', ],
                'tracking' => [ 'type' => 'string', 'locationName' => 'tracking', ],
            ],
        ],
        'DelBWListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'Bwcfg', ], ],
            ],
        ],
        'SetBWListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'BwcfgSet', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DelBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'bwType' => [ 'type' => 'string', 'locationName' => 'bwType', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'index' => [ 'type' => 'integer', 'locationName' => 'index', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBWListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBWListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelBWListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreditScoreResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreditResult', ], ],
            ],
        ],
        'CreditResult' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'failMsg' => [ 'type' => 'string', 'locationName' => 'failMsg', ],
                'dataId' => [ 'type' => 'string', 'locationName' => 'dataId', ],
                'inBWList' => [ 'type' => 'string', 'locationName' => 'inBWList', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'scoreDetail' =>  [ 'shape' => 'CreditScoreDetail', ],
            ],
        ],
        'CreditScoreResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreditScoreResultShape', ],
            ],
        ],
        'CreditScoreRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreditTask', ], ],
            ],
        ],
        'DataResult' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'integer', 'locationName' => 'timestamp', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'riskLevel' => [ 'type' => 'integer', 'locationName' => 'riskLevel', ],
                'riskTag' => [ 'type' => 'string', 'locationName' => 'riskTag', ],
            ],
        ],
    ],
];
