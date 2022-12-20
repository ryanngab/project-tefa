<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Major;
use App\Models\project;
use App\Models\projects;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'muhamad Ryan Firdaus',
            'username' => 'Ryan',
            'email' => 'firdausriyan402@gmail.com',
            'password' => bcrypt('200604')
        ]);


         \App\Models\User::factory(3)->create();




        Major::create([
            'name' => 'KLN',
            'slug' => 'kln'
        ]);
        Major::create([
            'name' => 'HTL',
            'slug' => 'htl'
        ]);
        Major::create([
            'name' => 'OTKP',
            'slug' => 'otkp'
        ]);
        Major::create([
            'name' => 'PMN',
            'slug' => 'pmn'
        ]);
        Major::create([
            'name' => 'DKV',
            'slug' => 'dkv'
        ]);

        Major::create([
            'name' => 'PPLG',
            'slug' => 'pplg'
        ]);

        Major::create([
            'name' => 'TJKT',
            'slug' => 'tjkt'
        ]);

        projects::factory(50)->create();
                // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Ryan',
        //     'email' => 'firdaus402@gmail.com',
        //     'password' => bcrypt('202020')
        // ]);


        // project::create([
        //     'title' => 'Jasa Pertama',
        //     'slug' => 'jasa-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ipsa magnam assumenda. Et quo ratione expedita dicta vel officiis, accusantium ab accusamus beatae rerum maiores ipsa mollitia iure impedit corporis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui unde odit excepturi commodi soluta vel error incidunt! Ex nostrum iste ipsa pariatur amet vero ea, quidem  officiis exercitationem enim ut veniam dolores esse maiores! Quidem dignissimos voluptatem tempora! Dignissimos repellendus eligendi harum eaque aperiam eum ratione perferendis fugit!',
        //     'major_id'=> '1',
        //     'user_id' => '2'
        // ]);

        // project::create([
        //     'title' => 'Jasa Kedua',
        //     'slug' => 'jasa-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ipsa magnam assumenda. Et quo ratione expedita dicta vel officiis, accusantium ab accusamus beatae rerum maiores ipsa mollitia iure impedit corporis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui unde odit excepturi commodi soluta vel error incidunt! Ex nostrum iste ipsa pariatur amet vero ea, quidem  officiis exercitationem enim ut veniam dolores esse maiores! Quidem dignissimos voluptatem tempora! Dignissimos repellendus eligendi harum eaque aperiam eum ratione perferendis fugit!',
        //     'major_id'=> '2',
        //     'user_id' => '1'
        // ]);

        // project::create([
        //     'title' => 'Jasa Ketiga',
        //     'slug' => 'jasa-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ipsa magnam assumenda. Et quo ratione expedita dicta vel officiis, accusantium ab accusamus beatae rerum maiores ipsa mollitia iure impedit corporis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui unde odit excepturi commodi soluta vel error incidunt! Ex nostrum iste ipsa pariatur amet vero ea, quidem  officiis exercitationem enim ut veniam dolores esse maiores! Quidem dignissimos voluptatem tempora! Dignissimos repellendus eligendi harum eaque aperiam eum ratione perferendis fugit!',
        //     'major_id'=> '1',
        //     'user_id' => '1'
        // ]);
    }
}
