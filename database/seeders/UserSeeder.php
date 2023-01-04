<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Daftar;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\MasterStudent;
use App\Models\Prestasi;
use App\Models\Rayon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Siti Astiya Nurhayati',
            'email' => 'astiya@gmail.com',
            'username' => 'astiya',
            'password' => bcrypt('asti'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Siti Novi Nurkomala',
            'email' => 'novi@gmail.com',
            'username' => 'novi',
            'password' => bcrypt('novi'),
            'role' => 'student',
        ]);


        Prestasi::create([
            'title' => 'judul pertama',
            'user_id' =>   1,
            'category_id' => 2,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam  similique ducimus dolores pariatur, illo eveniet, labore esse.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.',

        ]);

        Prestasi::create([
            'title' => 'judul kedua',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam  similique ducimus dolores pariatur, illo eveniet, labore esse.',
            'body' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.',

        ]);

        Prestasi::create([
            'title' => 'judul ketiga',
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'category_id' => 3,
            'excerpt' => 'Lorem kedua, dolor sit amet quibusdam  similique ducimus dolores pariatur, illo eveniet, labore esse.',
            'body' => ' <p>Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.</p>
            <p>Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.</p>',

        ]);


        Prestasi::create([
            'title' => 'judul sepulih',
            'user_id' => 3,
            'category_id' => 1,
            'slug' => 'judul-kesebpulauh',
            'excerpt' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam  similique ducimus dolores pariatur, illo eveniet, labore esse.',
            'body' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.',

        ]);
        Prestasi::create([
            'title' => 'judul apabia',
            'user_id' => 3,
            'category_id' => 4,
            'slug' => 'judul-fapa',
            'excerpt' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam  similique ducimus dolores pariatur, illo eveniet, labore esse.',
            'body' => 'Lorem kedua, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magnam voluptatibus sed quibusdam similique ducimus dolores pariatur, illo eveniet, labore esse.',

        ]);


        Category::create([
            'name' => 'keputrian',
            'slug' => 'keputrian',
        ]);
        Category::create([
            'name' => 'umum',
            'slug' => 'umum',
        ]);
        Category::create([
            'name' => 'Produktif',
            'slug' => 'produktif',
        ]);
        Category::create([
            'name' => 'Seni',
            'slug' => 'seni',
        ]);


        Daftar::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Javascript',
            'slug' => 'Javasript',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Memasak',
            'slug' => 'memasak',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'basket',
            'slug' => 'basket',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'pyton',
            'slug' => 'pyton',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 4,
            'user_id' => 1,
            'title' => 'Seni rupa digital',
            'slug' => 'seni-rupa-digital',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Unity',
            'slug' => 'unity',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);

        Daftar::create([
            'category_id' => 4,
            'user_id' => 1,
            'title' => 'macrame',
            'slug' => 'macrame',
            'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
            tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        ]);


        Rayon::create([
            'name' => 'Cisarua 1'
        ]);
        Rayon::create([
            'name' => 'Cisarua 1'
        ]);
        Rayon::create([
            'name' => 'Cisarua 2'
        ]);
        Rayon::create([
            'name' => 'Cisarua 3'
        ]);
        Rayon::create([
            'name' => 'Cisarua 4'
        ]);
        Rayon::create([
            'name' => 'Cisarua 5'
        ]);
        Rayon::create([
            'name' => 'Cisarua 6'
        ]);
        Rayon::create([
            'name' => 'Cibedug 1'
        ]);
        Rayon::create([
            'name' => 'Cibedug 2'
        ]);
        Rayon::create([
            'name' => 'Cibedug 3'
        ]);
        Rayon::create([
            'name' => 'Cicurug 1'
        ]);
        Rayon::create([
            'name' => 'Cicurug 2'
        ]);
        Rayon::create([
            'name' => 'Cicurug 3'
        ]);
        Rayon::create([
            'name' => 'Cicurug 4'
        ]);
        Rayon::create([
            'name' => 'Cicurug 5'
        ]);
        Rayon::create([
            'name' => 'Cicurug 6'
        ]);
        Rayon::create([
            'name' => 'Cicurug 7'
        ]);
        Rayon::create([
            'name' => 'Sukasi 1'
        ]);
        Rayon::create([
            'name' => 'Sukasi 2'
        ]);
        Rayon::create([
            'name' => 'Wikrama 1'
        ]);
        Rayon::create([
            'name' => 'Wikrama 2'
        ]);

        Rayon::create([
            'name' => 'Wikrama 3'
        ]);
        Rayon::create([
            'name' => 'Wikrama 4'
        ]);

        Rayon::create([
            'name' => 'Ciawi 1'
        ]);

        Rayon::create([
            'name' => 'Ciawi 2'
        ]);
        Rayon::create([
            'name' => 'Ciawi 3'
        ]);
        Rayon::create([
            'name' => 'Ciawi 4'
        ]);


        Instructor::create([
            'name' => 'Bambang',
            'daftar_id' => 1
        ]);

        Instructor::create([
            'name' => 'Yanto',
            'daftar_id' => 2
        ]);
        Instructor::create([
            'name' => 'Asep',
            'daftar_id' => 3
        ]);
    }
}
