<?php

use Illuminate\Database\Seeder;

use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAUTH2 with laravel passport';
        $t2 = 'Pagination in vuejs';
        $t3 = 'vue js  even listeners for child components';
        $t4 = 'laravel homestead errors';

        $d1 = [
            'title' => $t1,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aperiam unde eaque iusto dolorem ex praesentium maiores omnis aut in.',
            'channel_id' => 1,
            'user_id' => 2,
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquid exercitationem at voluptates explicabo, eaque culpa autem doloribus cumque consequuntur odio recusandae. Obcaecati possimus porro optio libero laborum distinctio alias delectus, itaque ratione cupiditate magni asperiores reprehenderit voluptates quae fugiat incidunt numquam facere dolorem amet beatae, ea, quisquam maiores corporis.',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque praesentium laudantium itaque voluptate in, eveniet vel sint aspernatur sequi neque similique est esse explicabo sunt aliquid veniam hic molestias aliquam!',
            'channel_id' => 5,
            'user_id' => 1,
            'slug' => str_slug($t3)
        ];

        $d4 = [
            'title' => $t1,
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quod labore nobis quasi illo numquam eum dolor, necessitatibus explicabo. Fuga?',
            'channel_id' => 4,
            'user_id' => 1,
            'slug' => str_slug($t4)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
