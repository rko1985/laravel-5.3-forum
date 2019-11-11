<?php

use Illuminate\Database\Seeder;

use App\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, asperiores possimus odio sunt reprehenderit aperiam eos tenetur voluptas unde inventore.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, asperiores possimus odio sunt reprehenderit aperiam eos tenetur voluptas unde inventore.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, asperiores possimus odio sunt reprehenderit aperiam eos tenetur voluptas unde inventore.'
        ];

        $r4 = [
            'user_id' => 1,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, asperiores possimus odio sunt reprehenderit aperiam eos tenetur voluptas unde inventore.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
