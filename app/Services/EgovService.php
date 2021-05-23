<?php


namespace App\Services;

use App\Domain\Contracts\EgovContract;
use App\Helpers\Egov\NCANodeClient;

class EgovService {
    protected $path =   'http://127.0.0.1:14579';

    public function register($file,$password) {
        $nca    =   new NCANodeClient($this->path);
        $info   =   @$nca->pkcs12Info(base64_encode(file_get_contents($file)),$password);
        $data   =   $info->getRaw();
        if ($data[EgovContract::KEY_USAGE] !== 'AUTH') {
            return [];
        }
        return $data;
    }
    public function login($file,$password) {
        $nca    =   new NCANodeClient($this->path);
        $info   =   @$nca->pkcs12Info(base64_encode(file_get_contents($file)),$password);
        $data   =   $info->getRaw();
        if ($data[EgovContract::KEY_USAGE] !== 'AUTH') {
            return [];
        }
        return $data;
    }
    /*
             {
        "valid": false,
        "notAfter": "2021-02-16 19:09:36",
        "chain": [
            {
                "valid": false,
                "notAfter": "2021-02-16 19:09:36",
                "keyUsage": "AUTH",
                "serialNumber": "568204328255642705760548210307834075269694884030",
                "subject": {
                    "lastName": "СЕРГЕЕВИЧ",
                    "country": "KZ",
                    "commonName": "ВОСТРИКОВ ИВАН",
                    "gender": "MALE",
                    "surname": "ВОСТРИКОВ",
                    "locality": "Г. АЛМАТЫ",
                    "dn": "CN=ВОСТРИКОВ ИВАН,SURNAME=ВОСТРИКОВ,SERIALNUMBER=IIN861128300621,C=KZ,L=Г. АЛМАТЫ,S=Г. АЛМАТЫ,G=СЕРГЕЕВИЧ",
                    "state": "Г. АЛМАТЫ",
                    "birthDate": "1986-11-28",
                    "iin": "861128300621"
                },
                "signAlg": "SHA256WithRSAEncryption",
                "sign": "JOhNtMoAWBFGCo4z+5OzLX85/wEl1ny+KEcF8IwqdJlvVmxpBF/mslQRFafQz/CfZvnBx3ZuQyNbACNKosQDhHiJevlHVQRDrpq0KbzXZ2ApudJYGeZbSZMaceVy39b3eirqZ6yB/IL+Xm68YXs/juql6X9VjdF+wEy5XWriIAiGvCbPjKuzsNeS2MnVt8LxiEh3pxW9jPk5cDdISCXe5zBAn/emT7pfCx5KHREhwdYRfOyB71OVAMDBk+b9v2Tl8n/DNDKSdBvs5jtwBxgPAVGqYODBH2C3WzIbvwDtLEeQ9sKMx5Jhxn181qtJik8mVJ+EQ6Y+OEBeuARqT/yYuXvh0HQxihTiALF/qd8cMIbbrUFqYrcg2HVmAKN3puYwmbM8Jbb5FOFieZFRozd6cbYkBj/t+42s9dW9rz+EtvzktOs35nvopyb7lWUBFSPCEyNB5IfYdJM+QFbshuP/rA2iEsA26ogceh4fp0bJQM3CPYMRyEVb+euw1vxOko5yKX9NB1Aznl17B/Kv+G5eMjwmxJCTieZvW/hg5FT9vUs1HRbAtWbmW281zwygUg+VNYIrujC1XhyhqEIM9e3SI45KUrrkU0bFzpfh2RSwwy9sR9yBjeD1rAavS9V0w6IcUKDQxSF6O6K3To7KjGOwEdlTxxSKONlvsX0Kl7lIRXo=",
                "publicKey": "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlhpAYIffnLQhdujZhM8w73yd4kWZO34VDnK+mQqdbOucKwzAWX50siBBykH3zt+Gj4PUbRFi6nx/v+Tn5Nk71PEDqhjUnWGMwEPJT23YkpYlR6HBydSS1fVFgdobtW1NqzoA++c0KXbZF1iIWX87tAAc6wV9OwVt4WO41mCJFYspF39cSmytUPlvZdWnzmUkTQp7+w2W5j720xKyTFXzviIemoHuW64wdc04seP/I5o12vV4qDutrCjYHss7Jw5z7RW06Ar6KqutNbDJPs0XXMyHtVOUSAwCKssDe/tFWeqH7CDr2XNjQVJPRSN2vBycwCnp24HoZqeF5QEwwbvmOQIDAQAB",
                "issuer": {
                    "commonName": "ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
                    "country": "KZ",
                    "dn": "C=KZ,CN=ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)"
                },
                "notBefore": "2020-02-17 19:09:36",
                "keyUser": [
                    "INDIVIDUAL"
                ]
            },
            {
                "valid": true,
                "notAfter": "2025-06-25 10:26:36",
                "keyUsage": "UNKNOWN",
                "serialNumber": "305229402244045643062022638026814839687773800430",
                "subject": {
                    "commonName": "ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
                    "country": "KZ",
                    "dn": "C=KZ,CN=ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)"
                },
                "signAlg": "SHA256WithRSAEncryption",
                "sign": "Ddx8a01Z3HOMbVrvQcQZVS8yzIJRCYaEMbLYoWyDsMpoMB68jchHJ5ovGE4Qd2J/ihyzGe4+vRrtA9zKy98VrrJO+WPZoibepdj8tr4uU6WM0KiPcQTOMVLJJSEC/U0C+eWa5j6OpbRnQuQuJXZA/5eUJ5WMCZJae6vlIuVsNR7fnJgHdcYnxSXvgLHt9YkN1PZOuCHmFNI09U/isiUs004dRxe5a0AFVXwWy2v3DcL6K6Uq9ptBolaEy6mwYPXuVFRaZMyRFAL30vrIiU7k8dHGsNzY0Y2f+cwlfOtW049GIkTYmE6DV3zkNAKs0AhS1aDZq/epsV2R5c8Je33EF4E+SkcDuAK1h/xr8czx3Bi+tdoltlgqCHXT/dXX68L3ioelOTsLTfPYxVO2Itm3PGqfc3V5kyvz0Grgc9M8yNAKDuncn1qwzioy9ZgPiWNTqmm9M/KjyVTT3qoDmPsfFHkGwiEqUBWEyCSWEjDALbDiIvI2PuOx48O3coB7dfW0s2ClhfOvLrUKDMxVJJ1yJXOZb78ckfLlnllJrwCkPS7a43K6zK8ba5zi63TcAASCRpR+CPcEnChHPh4s8dCPu9oexo4/0ZdXbMDesYwylndleu2WGcFaxiSWix9Jpas50AH0qnijfDlGlVFZSPcBENrdb3M7iNgWIbzavtKG7nQ=",
                "publicKey": "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEArlvMc9X0xktVYz/TmbbFKzkNnX5ZDqRN748xjaE5v/nbv56n0h2+UDG3NCW9uvpDojwmD0Vg5YVB11ASoyh6KmxpPy9vsXnr1UingzcEuz3X4vXElWFGGiWCidauN32fc3TqkS+CJc4PYHGVak8ifFU29MtEi4OOw7rko57Jl4HMuc+FRoQsb1Nw+e9m312i5xoLzxxpL1EVE1EObTfJ+4H4skT7me5f6zJwxUuQAojQAe7ghx2XoOKSo/aX8wHcFJydDsLPNMIqfmm6rpHTpW45X0QuEJpvwlIXa/Ovh5C4cActfPrX8s3ba8Ug0YwZvwuxLhKQIDP/fSxidMKwOVwAyJCLYV30dtwEwcSVfBCyg3/k5aWofgK2ZHnm6Z4+9sLAJGZkXXabrokr8nr0IOPnlioQMuGqYif4GFUy/VlWlanLcOSvi2sfdqDJeQ4XSOP1tazhifmBITKNwtZFv1e95i0OIH0mkGftZEax3BJ3Oi2Gk3xVxP0s5ImHgkrLztYiT2QuDC5MqyZ7NX0Q4k9dEYEBqbEAYvE1M8V7QCvqM+pBfS0MmMasgGrQsb22kYJ6MS4qQVK6IvOJT/IKqOUNT5HzFRYwqygzpHQQvHlkt8PGVcwK9m1F6WwbKecv2S2NuR+WQPI2aU2Qf3hL6Ooi0C4wH4noFbkf34+qXVUCAwEAAQ==",
                "issuer": {
                    "country": "KZ",
                    "commonName": "НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
                    "organization": "РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»",
                    "dn": "CN=НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA),O=РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»,C=KZ"
                },
                "notBefore": "2018-08-08 10:26:36",
                "keyUser": []
            },
            {
                "valid": true,
                "notAfter": "2025-07-27 11:22:53",
                "keyUsage": "UNKNOWN",
                "serialNumber": "483236974449879461588506755984708205979682368059",
                "subject": {
                    "country": "KZ",
                    "commonName": "НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
                    "organization": "РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»",
                    "dn": "CN=НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA),O=РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»,C=KZ"
                },
                "signAlg": "SHA256WithRSAEncryption",
                "sign": "WkjJgzPV7GDmpd9N38h9o8M+t/rpeJvEgReNzsT10fwKV3exmxwoiyFXAOjHf+lAVITj2kdcRUiD1Gr7vaWUCBpXeAMpKukfov31jG0q9Er0mWfs9iDaow66AwPa1zqh9kW8/xuEQVz/iI9Gl6F9q8bdEvFyb4xuD7TqFlqLIO7Z6oJlJZatIEACKFTTjd54d8+7/MJ3OVxfhe8ozMfXywQ3C7sjM9uSKzkgZZHmjpWTGljfAnjqP3ACLMEx1bxW+sKjjzrlRcML5iKDt8HJ2N/MtU7putMoMAAd5x79RPvZSV9h9fW4/qdnfwwneieh/w+KWJN+X6b9wMVWTh24CVif+NyCYqQFwr1RYkKtcBzSiRmmXh/rmPm4jmefGg6jNycbF66OcVI/HxnIH0zAZaVGM6eSLrbdiXjr9OSG2nt+qIkSsytjxCPuoLzLkJxYexZbDWcEDd9G2GpvYgIyFo8+ycJpdLJBa5wPUn8brd4rWnadmzjptt8LYWxrG8XcnJc2N78emf7MFP4LXyHypht+v+bWWO9uze0l6p4Z2JcPg3CFvEftAsKBkXCusE7nOgXq8kVTNBTmB3PfUcq3Ss3+QPwdziMsW8SLeEnO5Rcec7HAOrI2t24QY9htRREwUAGjAJQfDRrjEP+zzoazILyKPn6tGXhRcDybTrqqjRQ=",
                "publicKey": "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAlqLdP8Z8G8sr5fWi+lp8r2fqRe2NLsiuHntkNTqu11bnY7h+q5LlAbTVJiPfFRchqegg64shKdqNy+9rPW3Swq2hwAQQ2HrAwoTaeKPgh3tusVxhRAyEmq2vVwGWmuiciuDUSr45hMYMEGb8SwocFdW17gx6b+MYivcQ4UQv+Jgmt1r00tyBd5qcavUISM/xmYqNfj+oxYCpuHto+DSYmkD1LCgObSe8JJ2BMYH1ShF7GoLprvnEh1BhxhYQj9zHqnlgee3j96IeAT+nfB0mOgK06pzMqXUAwJ0ip1F5zSzDhRfE/6Y9GLI5O3mPNeU1LMH70DTPoPHwFg4+Cvo9UGkuYO5ZQBsEPZIAXalW8f11u5O5wA5wQPv/v9Q1NCfjMsu3UiGG7pNemOkOatzIn22aP4ys8Zfrq+UfgDuRsQcevwmSEnhcyQ9CbZv1T28wTHU8WhF3vwB/f93Z2rJorvJuHuJFk/aBPckeQW3eDxgks3L1dZM2nIIeYrUkE3oey223eVQQa/YWAfOF8svVt2HbtQPjhGGj6858xvTYi4FErZA2P5nojgJ7jSdSMWiu8dLt/KjNHTDEIPaYCKvt0qtgS36gV0QCbXGyrSTNIXrXhCeX71SYvJbjPMYmSH94tY6KERSpSd5ixVaVYKbZVbyww8ZTD1PBeL42esSCaZsCAwEAAQ==",
                "issuer": {
                    "country": "KZ",
                    "commonName": "НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
                    "organization": "РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»",
                    "dn": "CN=НЕГІЗГІ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA),O=РМК «МЕМЛЕКЕТТІК ТЕХНИКАЛЫҚ ҚЫЗМЕТ»,C=KZ"
                },
                "notBefore": "2015-07-27 11:22:53",
                "keyUser": []
            }
        ],
        "keyUsage": "AUTH",
        "serialNumber": "568204328255642705760548210307834075269694884030",
        "subject": {
            "lastName": "СЕРГЕЕВИЧ",
            "country": "KZ",
            "commonName": "ВОСТРИКОВ ИВАН",
            "gender": "MALE",
            "surname": "ВОСТРИКОВ",
            "locality": "Г. АЛМАТЫ",
            "dn": "CN=ВОСТРИКОВ ИВАН,SURNAME=ВОСТРИКОВ,SERIALNUMBER=IIN861128300621,C=KZ,L=Г. АЛМАТЫ,S=Г. АЛМАТЫ,G=СЕРГЕЕВИЧ",
            "state": "Г. АЛМАТЫ",
            "birthDate": "1986-11-28",
            "iin": "861128300621"
        },
        "signAlg": "SHA256WithRSAEncryption",
        "sign": "JOhNtMoAWBFGCo4z+5OzLX85/wEl1ny+KEcF8IwqdJlvVmxpBF/mslQRFafQz/CfZvnBx3ZuQyNbACNKosQDhHiJevlHVQRDrpq0KbzXZ2ApudJYGeZbSZMaceVy39b3eirqZ6yB/IL+Xm68YXs/juql6X9VjdF+wEy5XWriIAiGvCbPjKuzsNeS2MnVt8LxiEh3pxW9jPk5cDdISCXe5zBAn/emT7pfCx5KHREhwdYRfOyB71OVAMDBk+b9v2Tl8n/DNDKSdBvs5jtwBxgPAVGqYODBH2C3WzIbvwDtLEeQ9sKMx5Jhxn181qtJik8mVJ+EQ6Y+OEBeuARqT/yYuXvh0HQxihTiALF/qd8cMIbbrUFqYrcg2HVmAKN3puYwmbM8Jbb5FOFieZFRozd6cbYkBj/t+42s9dW9rz+EtvzktOs35nvopyb7lWUBFSPCEyNB5IfYdJM+QFbshuP/rA2iEsA26ogceh4fp0bJQM3CPYMRyEVb+euw1vxOko5yKX9NB1Aznl17B/Kv+G5eMjwmxJCTieZvW/hg5FT9vUs1HRbAtWbmW281zwygUg+VNYIrujC1XhyhqEIM9e3SI45KUrrkU0bFzpfh2RSwwy9sR9yBjeD1rAavS9V0w6IcUKDQxSF6O6K3To7KjGOwEdlTxxSKONlvsX0Kl7lIRXo=",
        "publicKey": "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlhpAYIffnLQhdujZhM8w73yd4kWZO34VDnK+mQqdbOucKwzAWX50siBBykH3zt+Gj4PUbRFi6nx/v+Tn5Nk71PEDqhjUnWGMwEPJT23YkpYlR6HBydSS1fVFgdobtW1NqzoA++c0KXbZF1iIWX87tAAc6wV9OwVt4WO41mCJFYspF39cSmytUPlvZdWnzmUkTQp7+w2W5j720xKyTFXzviIemoHuW64wdc04seP/I5o12vV4qDutrCjYHss7Jw5z7RW06Ar6KqutNbDJPs0XXMyHtVOUSAwCKssDe/tFWeqH7CDr2XNjQVJPRSN2vBycwCnp24HoZqeF5QEwwbvmOQIDAQAB",
        "issuer": {
            "commonName": "ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)",
            "country": "KZ",
            "dn": "C=KZ,CN=ҰЛТТЫҚ КУӘЛАНДЫРУШЫ ОРТАЛЫҚ (RSA)"
        },
        "notBefore": "2020-02-17 19:09:36",
        "keyUser": [
            "INDIVIDUAL"
        ]
    }
             */
}
