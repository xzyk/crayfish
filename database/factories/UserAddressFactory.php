<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    $addresses = [
        [ '浙江省', '杭州市', '余杭区' ],
        [ '浙江省', '杭州市', '西湖区' ],
        [ '浙江省', '杭州市', '上城区' ],
        [ '浙江省', '杭州市', '滨江区' ],
        [ '浙江省', '杭州市', '拱墅区' ],
        [ "江苏省", "南京市", "浦口区" ],
        [ "江苏省", "苏州市", "相城区" ],
        [ "广东省", "深圳市", "福田区" ],
    ];

    $address = $faker->randomElement($addresses);

    return [
        'province'      => $address[0],
        'city'          => $address[1],
        'district'      => $address[2],
        'address'       => sprintf('第%d街道第%d号', $faker->randomNumber(2), $faker->randomNumber(3)),
        'zip'           => $faker->postcode,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->phoneNumber,
    ];
});
