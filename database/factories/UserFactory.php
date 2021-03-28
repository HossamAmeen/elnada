<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;




$users = App\Models\User::pluck('id')->toArray();

$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'en_title' => "El Salem Anti Bugs",
        'title' =>  "السالم لمكافحة الحشرات",
        'description' => "شركة السالم لمكافحة الحشرات هى افضل شركة ابادة حشرات بشهادة عملائنا ,نستخدم مبيدات عالية الجودة ,جميع عمالنا مدربين على اتخاذ اللازم فى اصعب المواقف ننتظر مكالماتكم ونسعد بالخدمة",
        'en_description' => $faker->text,
        'home_description' => "",
        'en_home_description' => $faker->text,
        'phone' => "01010079798",
        'whatsapp' => "01010079798",
        'address' =>"مصر - أسيوط - شارع الجمهورية امام فرع فودافون" ,
        'facebook' => "https://www.facebook.com/",
        // 'twitter' => "https://twitter.com/",
        // 'instagram' => "https://www.instagram.com/", //
        'video' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        'video2' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        // 'youtube' =>"https://www.youtube.com" ,
        'user_id' =>1 ,
    ];
});

$factory->define(App\Models\News::class, function (Faker $faker) {

    return [
        'title' => $faker->name . "عربي",
        'en_title' => $faker->name,
        'description' => " قبت بالولايات في حين. ان يقوم الدنمارك أخذ, الأمم وقامت المتّبعة ان وقد, كل دول واتّجه وبالتحديد،. قد إحكام الأولى وقوعها، قام, قد بين أواخر الصفحات, عل شيء لإعلان الأمور المتحدة. أعمال باستحداث عن حين, كل عدد لأداء أوروبا الفرنسية, بهيئة اليها لان قد. ومن كثيرة الشّعبين ثم, فصل ٣٠ أوسع الثالث. لان هو ويتّفق الأهداف. كل اتفاق أفريقيا لها, دفّة الإتحاد به، بـ, لإعادة مقاومة الشتوية مكن تم. ",
        'en_description' => $faker->text ,
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Article::class, function (Faker $faker) {

    return [
        'title' => $faker->name,
        'en_title' => $faker->name,
        'description' => " قبت بالولايات في حين. ان يقوم الدنمارك أخذ, الأمم وقامت المتّبعة ان وقد, كل دول واتّجه وبالتحديد،. قد إحكام الأولى وقوعها، قام, قد بين أواخر الصفحات, عل شيء لإعلان الأمور المتحدة. أعمال باستحداث عن حين, كل عدد لأداء أوروبا الفرنسية, بهيئة اليها لان قد. ومن كثيرة الشّعبين ثم, فصل ٣٠ أوسع الثالث. لان هو ويتّفق الأهداف. كل اتفاق أفريقيا لها, دفّة الإتحاد به، بـ, لإعادة مقاومة الشتوية مكن تم. ",
        'en_description' => $faker->text ,
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Service::class, function (Faker $faker) {

    return [
        'name' => $faker->name ,
        'description' => "ابادة فورية ونهائية لجميع الزواحف كالثعابين بدون رجعه
        ",
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Question::class, function (Faker $faker) {

    return [
        'question' => substr($faker->text , 0 , 20) . "عربي" ,
        'answer' => $faker->text . "عربي",
        'en_question' => substr($faker->text , 0 , 20) ,
        'en_answer' => $faker->text,
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Gallery::class, function (Faker $faker) {
    return [


        'user_id' =>1 ,
    ];
});

$factory->define(App\Models\Video::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,

    ];
});
