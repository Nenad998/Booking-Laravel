<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Faker\Factory as Faker;
class HouseSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$faker=Faker::create();
$images=['1602873949_img3.jpg','1602873985_img6.jpg','1602874180_img7.jpg'];
for($i=0;$i<15;$i++) {
DB::table('houses')->insert([
'name' => $faker->city.' GuestHouse',
'user_id' => rand(1, User::count()),
'description' => $faker->paragraph,
'image'=>$images[rand(0,count($images)-1)]
]);
}
}
}
