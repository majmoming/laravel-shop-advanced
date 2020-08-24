<?php

return [
    'alipay' => [
        'app_id'         => '2021000118648620',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArERbfKUyxuLRDKdhJCNqccXGYyFR1CopNsMRIwX5fQwc4MlWJP79aCITGS7zN02b32OSt/eAAVuxnPT3/ti8impx+bbfxVrGOcIi3rFsDUnThgMoPoWjBioHY43vb5N6lPJ5zHjwGP4L0Jveot5RqM6gX3OowbmQTRbOXNWLkv7utR5UPzdtIO9C2cyEH8MdhiNiTXtv6aJk9rQH+/4r5KV8MvnWueU8iSK6vYt++6OXN7d6RVd8dlQ4HpbkQKapPxeXaDkyM8Dd455er32G/4XbekfSwtKdD1fVaDsDnc4Q0UWjdHe2tzjjmZrGiy1HGl2kW7vLRhTJlSC0GTc6WwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAmV4e8c/+2JClbkFl7dt6SFoAlIzB2XlAHcdTbOnolsLPqz45eQC5N0eE8RKvF4HJ9pE4nOyJ62xkIkuquuy03t36ktgGxfeft/zD+l7SWwsjYZr2Oo/pINXftpbBhWJP84kOpi7wHo14DfmZBl5ddvVtzpCP13XCYpsI9JrtFtRdFTdlTIu2wOBE+xZZlxmYvKdHz13c28ZjfpLxskrKG43foDl/t2LZM1Sd2U8QCBmtq4I8OSIrW23sbkaJM7ImRupJX/K2RZoW+M4zbjS/lJdRtf07LVyz8ssV0AtnNB/NEnWPahxGWH2qX2dUWcF6vSJzkY19AKIQW14oiv/b4wIDAQABAoIBAGBS3eqP8QaBanVh+6u1Qgr5BA5IjWOSJLPPQdVQ37T4a8eokB4wVyOh9pwWWQPRj1AeC0l7wm+rJwTnMzatfjfPgRYDOdXSXW0IAupX7ZQi3bjqw6UqR4hI63XZH3gvs/lH5nx3VHZL8dANKI/4aolRQgMPhlgTbN/TcX93YlsIUuFpgTeByegxbo2cIS8N90LLnx1F3jO1RbdAGinIw1TMEdNN0Ypo2s3O80WKmMsOHDA/pgiDW+Javwd0cUXhHybGpXuCZcIZy7U7qrrT+QpMKJk097pwmuvXive8VxL23NCT8XolxgoXx7ebFHkojiuVNecC0FE0ZiffDlWbGNkCgYEAy/H9i96W+IdQ8PBd6BWWUKv0Rmqz5wfxxff/AqxA4SyYtqZ6TCDxvdnUWFDh2lkUmfYFEs0oULLMbAfP5fiRpErPsYtmSkWgcGDoSYxn2JkS4OZGPH8SGuH8RJrHdGkcKxuP8ryNc0k+Xn5NC2KpeV33QRMDQOLJrQukGG8+b4UCgYEAwINVTFcuJXMc4p3xmgfom3hN1wbbCQRm1sEMXw/fRk8od4Z4liV2Z42Ch16Icu3WUULKUAzKZzuxWK5wQ6xBwcQkaxLsp3rbMfWS1YKZxdMjpcYyDDMOemnMrcyAqgXxtAquvlGNNMsVN3InlobgIjwQSev0b8aE8fWxOuArlkcCgYEAgeNV8p3KEvDDaR/8/tG40Roi0jIk77AMmGPQotgn3gE0JaezXgbhT2OLLNAed5yiVUfthULqOTMWpHr5OmLsBvGqg03f0M+1Vb0yU507iiQ7dMbT1rWrRznEG8Fj5E0JJp9AN31ErTbppO7VjLnCa8yfq287dDi77xzp3rIC1q0CgYBRNxbFHgJZyjZlZDyIvs1iyV4NWNcO9sxrzQVrFUccYkiwJAq7TRKmnQx0D22BDtVbctHm835wDr7CqtSxt/oFxLmYcmNkRHA0o2VOrcoxquFfDj4O53s0KW4v5BZjpB5T1i3iHIV1wDczLPWGi2ADEVPN271Danyrlvst22SIAQKBgQCHmjOWgVMvFNZt/yc/ipopCGLr49h9LBiqG0zG2VflcDP6LltsG3EDiIS7xcbYfUYWvVAViuu1y3Xr51oJhHOSDn8kAzOD0t8rjJqjHZkTTEH6GtyQo1CkzbYQAMOsNUmylQBGJLrY7/zqoKLaaJtKfe9F1VU6wodWakXG64kKlQ==',
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
