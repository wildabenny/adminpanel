<?php



/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];*/

    $factory->define(App\Product::class, function (Faker\Generator $faker) {

        return [
            'shortname' => $faker->name,
            'longname' => $faker->sentence(mt_rand(3, 15)),
            'description' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
            'mainproduct' =>$faker->boolean(0.2),
            'image' => $faker->imageUrl(250, 250),
            'added_at' =>$faker->dateTimeBetween('-1 day', '+5days')
        ];
});
