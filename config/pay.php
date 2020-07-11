<?php

return [
    'alipay' => [
        'app_id'         => '2016102800774533',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApHaTobjv8d3yxlE+tkNlX4Vmlfqv8Q65xvXfgEJr2QjtUdrm98rIsxv7HgTiVdX08xMVDMVrjDJzWSmb/CzjJd5MrKJc1xAUgOZ8xSTaCqu26kdiRq1e0lGC5d5O0d8IlH7Xqq3iKKmKIUtEvVdhUFRSUqsKrMh5pmz0wSLZMno3cEFQEy/owttsEd7XxiO5Uccx82Y/KW/XsFDTjMuh/qnHiW689eNAItm9gabZoUqqg1c8iJzLDZ25iOu75ZJ3cyom4J8FB+6z0G8tGLNVT5fgTqWUPokgfx7R7J64e5SEMJeA5nrjY6bkvpCg++kMmoQHFlCr0V3eKRJ7qCqRYwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAgcLvGWboBsTvZ0dLpiIdbTjLkHatUGr6Kki1tsLb4PZ8V7TVVt7ktLMDhpeATRZ6lZsi1IDPXyi7uIvzUWFuAdZNTWQc2M0BjFVK2WA2MTYdlh6A5/d6CN+Eqcbw1ox7bu5o42VVMvrfT3Ryui8Z5r+DoJ6QU41dwu1e9n9jTLXNQ44xRHPC2YKQwTX1LeS7sqcc0Tf4jNsCiftSGvMg6Hl2mTs+BJxoJ5G3voy4It5jdF9BGs+wyUXI7v60KhSgBOruXwTbEktxicF0zBTJlKUjxAUXGDk8hpELEwZV4Ecnl4dIVV5R6HVO9UPCd4mxPFR8QTGeh/5PaznwAMUqnQIDAQABAoIBAGMswqNuhD3QPI157zaNcmIs+2BxY+tHp+WzZrbFXVol6Uj7W+amOrRk8XfnyNaiLJS1WjyCKnw3XKoixJfZWEOtL63Lq0SEAv/nnGphX2njS1+V9r3T5oBrnTBJbX79JcXWD3Jk22Y4WX6XqKvmHey/SPH03qgNLrExzNem6xUP6Jc0nKXICbRuPXBTUzPq6kDhCRKsJbJdnqxBwmElwSOhl5uy0cY2iiUCOuZmJp5Hnhd0OxsfKikW49D7ktEKQyi/WnS1nNUyZ1d11AuqZguckBntMIdjwPIqjPBgC9ciPqvRDXDjfPSm2bA+B8uv+2uy3GYQv8uR9fEuyLEQG6ECgYEA8Yc3vGXs7qwgustMEOn78Dtldi0RM0f/6WkvryQFSOIcC/+nMsp25h+7ISe7v+uCS+T2ccDg9hyMxIaAWM6eoUJYFOkSGcTGGb25Ag+EaqSby4IVuEyM1pqZ0MGSH2Zk2l51ccx0B2t8XhXhb9FylydMoPvE8BomtGK+UlDXIkkCgYEAiYlVwc/W7KVYdorSLKO3vU35ZfrFGB/SFRNnFieRoFmOcv2TdsKm6gZDHRWcxudwePAXOMWnVWQBKcednwxMOQTpGEs50xRarfPCWX3GNJlPxPQn5QFD0S9GFqeZKdyKEBs/vNuisXEE3jZTuySDwQa76xHB9my6shpfV9UKhbUCgYB3pUUt9cveG7SG9Ah1ZIOiaLoFRaP8pFEYfjvZ5d0cUq4UH4vi9DrcGqHndbhjBTZhhEW06hhGsrPk8sAHvisEtUnO6fpGe5yqybopVCiDb5GhyYoa5wjpkmJZ8FoDZgTVy+8f9WkQ9+T+8pXff4Dlcdla8f2H91xvBW9EdblsyQKBgB2TX9KerBwVblGHhqy8xA08UE5Cv9FxPk7z7i4QcjtmJsDJkMVwFE6s7A+8Dwuix0fqcUPvFQ3CxJFEcLu7/EQirzFfM98VOG7BxWBTMKUs9r9mtZGEVR4NqWfDwKcE2ted1HX7USARKrfSPO04a/C9Tvm8xtYECZ21GB2eHXYlAoGAbfGFRgErfSSTGsd0PQ2K0P+ItH5y/bLgOdubGbXtIW9RJexQZzBWnMDqvqvtmKZHCB6OvtgyXFQfejr34bvA3f3O2zdtlrAPPSVpQJFfmzE6sp0TI+CMZsp8afbMkEVSlYAj7fZENntboWCn/jYOdATudrbsUoivddTwsK27xp8=',
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
