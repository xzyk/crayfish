<?php

return [
    'alipay' => [
        'app_id'         => '2016102800774533',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApHaTobjv8d3yxlE+tkNlX4Vmlfqv8Q65xvXfgEJr2QjtUdrm98rIsxv7HgTiVdX08xMVDMVrjDJzWSmb/CzjJd5MrKJc1xAUgOZ8xSTaCqu26kdiRq1e0lGC5d5O0d8IlH7Xqq3iKKmKIUtEvVdhUFRSUqsKrMh5pmz0wSLZMno3cEFQEy/owttsEd7XxiO5Uccx82Y/KW/XsFDTjMuh/qnHiW689eNAItm9gabZoUqqg1c8iJzLDZ25iOu75ZJ3cyom4J8FB+6z0G8tGLNVT5fgTqWUPokgfx7R7J64e5SEMJeA5nrjY6bkvpCg++kMmoQHFlCr0V3eKRJ7qCqRYwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA8FQp5XcZ9Pg0ZhiIe1Dh5PXrroFEYUSMbVhQ23RH0VCSA5h17XFRDLirCIpvec3njIbOmolKKGDP1aPTTStCa1WACGqtrWSfRK16GfKElsyBddW5AEbIb8xCqXKfnufqpE/Ul/+jcA41E0MCCXgf3ZtCkyZIifAXeTRno28kvX9wkyIMOkX1OCZ4HnJ+Ff3X1qh+3A+djKkXkolZ3prCWSVtxDoNtluvUiicOSPfcsFHjW4MfPNZS9PAyrfAbmayJQAkSWc4FF5fckAA3C3DE8q+PhQno1zC+ils8nNmHPFHoNH7p60BjcN4NNR5JMusucH8QWYSy8JulXGi5JsmDQIDAQABAoIBACYMrTVvTeTDB0jCyZj8jUc6yD2wqarct374ZJTaLCSvpO58zO7y6eohsrJ/eHbIasiM71j4M42BBmbEsUeeeb2Uo9ixSx4QuEafUJ2bD/LwHe8SD2BD1Kgeps89HpiCD1xEZ1xJVQ8AsNaD3WayZhkn47p4bTOpl43RBjeR+TcnD5T5rGZyP/ZhZBeN7nRnK8YpEpPm8TBWoXtb0RqbGVL8T2lWKwNBD9uwslv3xN6xBK77IW0J6WZJJAwai5cAVzJ8Tx6q1u2llvJrPqMT2fLpIwQF2YFP+6Eyinhe4vOuhv8fX4hqSY7kZkBDs5NCpiMwyQeJgQ45njGv/OMPPQECgYEA/QPMHdFbJXQhTwvrZcdc8teocJTjho+gaLVoYn650VoVWG0GtJqAWx4/0ekQuz/0kvkceabqsBgBq15fdx0W6TkWZW4Rb1kl2XxHImw1hfV6xa+1W7YAQf/1TcaiNd6KP/Yv31KKFZOlEZehnln9Ef7+qSVnBDtRvKuR0Ojz9WkCgYEA8yoMq37cDCXi8/RHZAr8eUsRmrBWZoy63vmeMQxIqmHPez77lHwTs9BqtqhAH3/UUePd5lKx2lhF4yjgSayZ2KRgIhCUNw3Pmhfd/9Xz+EOKcjYe6CxJ1AtrsSjSr31UaQg7HLuH7lEEBciS4h7vIyvjMiOhrqUZWDje3le6IwUCgYBu8HtPl7yfb4wrXM6akg/vayAwPRiGp/Nt9h0PEwHnCdjSLPwDtLsTOPBC2i677A8RYqlZrha5n80blwXE9LxXBvELCHgcmro94oBOV6QgWMK8a47Z57O1PMYSlEYL2MhFw2y6PzbMvzBhxlrXVB3jBiwjfoLtGBV+5LvLHlnaAQKBgEXtvs0G44M+1gCwLGOx4R+EniBtO7usFwWOpZaXYMJW9JMN7s2pzQS2GCpFQoOMgGO4cxUMjQcswZRtKesmDuxFgTvqpqUafKxk1rv/LHUl/0ePFt5P9j9btXGyOryq/z5hVpaRu6qmc9Cx+MO8f6sOsPy3UIToB9zeJgGtGuN9AoGBAN/cFiDIgCyWI2MyUVgGqPthNb/ybVYV3efKzxGQmsUbvM6lQWUAeUL9cKKhi4ORLO8QM4QdCW9wzrDelo5sASC5KOnGqm4UttWgQeSaPKYIu3NxYL+nxyoXIfm7Be4r3/yw4cntr4NwUI7uRNWzOcUZRzlslquFKyDYSdQm/2LL',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
