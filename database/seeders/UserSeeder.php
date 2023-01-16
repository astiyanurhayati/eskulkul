<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rayon;
use App\Models\Daftar;
use App\Models\Rombel;
use App\Models\Category;
use App\Models\Prestasi;
use App\Models\Instructor;
use App\Models\MasterStudent;
use App\Models\Student;
use App\Models\StudentUser;
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
            'name' => 'Sema', 
            'email' => 'sema@gmail.com',
            'username' => 'sema',
            'password' => bcrypt('sema'),
            'role' => 'instructor',
            'category_id' => 1,
            'eskul_name' => 'Merajut'
        ]);

        User::create([
            'name' => 'selvia', 
            'email' => 'selvia@gmail.com',
            'username' => 'selvia',
            'password' => bcrypt('selvia'),
            'role' => 'instructor',
            'category_id' => 4,
            'eskul_name' => 'Seni Rupa Suara'
        ]);

        
        User::create([
            'name' => 'Nazwa', 
            'email' => 'nazwa@gmail.com',
            'username' => 'nazwa',
            'password' => bcrypt('nazwa'),
            'role' => 'instructor',
            'category_id' => 2,
            'eskul_name' => 'Pencak Silat'
        ]);

        User::create([
            'name' => 'nadya', 
            'email' => 'nadya@gmail.com',
            'username' => 'nadya',
            'password' => bcrypt('nadya'),
            'role' => 'instructor',
            'category_id' => 1,
            'eskul_name' => 'Memasak'
        ]);
      
        User::create([
            'name' => 'Devia', 
            'email' => 'Devia@gmail.com',
            'username' => 'Devia',
            'password' => bcrypt('Devia'),
            'role' => 'instructor',
            'category_id' => 3,
            'eskul_name' => 'Figma'
        ]);

        User::create([
            'name' => 'aghies', 
            'email' => 'aghies@gmail.com',
            'username' => 'aghies',
            'password' => bcrypt('aghies'),
            'role' => 'instructor',
            'category_id' => 3,
            'eskul_name' => 'Javascript'
        ]);


        // Student::create([
        //     'name' => 'Fitri',
        //     'nis' => 2735325732,
        //     'rombel' => 'PPLG XI-5',
        //     'rayon' => 'Cicurug 3',
        //     'jk' => 'P'
        // ]);

        // Student::create([
        //     'name' => 'Giffa',
        //     'nis' => 89048504,
        //     'rombel' => 'PPLG XI-5',
        //     'rayon' => 'Cisarua 6',
        //     'jk' => 'L'
        // ]);

        // Student::create([
        //     'name' => 'Rafly',
        //     'nis' => 974594,
        //     'rombel' => 'PPLG XI-5',
        //     'rayon' => 'Cisarua 1',
        //     'jk' => 'P'
        // ]);

        // Student::create([
        //     'name' => 'Ali Gulam',
        //     'nis' => 92397532,
        //     'rombel' => 'TJKT XI-5',
        //     'rayon' => 'Wikrama 1',
        //     'jk' => 'P'
        // ]);

        // Student::create([
        //     'name' => 'Sarah',
        //     'nis' => 075325,
        //     'rombel' => 'MPLB XI-5',
        //     'rayon' => 'Wikrama 1',
        //     'jk' => 'P'
        // ]);
        Student::create([
            'name' => 'Nazifa',
            'nis' => 2305832,
            'rombel' => 'DKV XI-2',
            'rayon' => 'Cicurug 8',
            'jk' => 'P',
            'kelas' => 'XI'
        ]);

        Student::create([
            'name' => 'Monalisa',
            'nis' => 43243,
            'rombel' => 'PPLG XI-1',
            'rayon' => 'Cicurug 8',
            'jk' => 'P',
            'kelas' => 'XI'
        ]);

        StudentUser::create([
            'student_id' => '1',
            'user_id' => 2,  
        ]);
        StudentUser::create([
            'student_id' => '1',
            'user_id' => 4,  
        ]);
        StudentUser::create([
            'student_id' => '1',
            'user_id' => 6,  
        ]);
        StudentUser::create([
            'student_id' => '1',
            'user_id' => 3,  
        ]);

        StudentUser::create([
            'student_id' => '2',
            'user_id' => 3,  
        ]);
        StudentUser::create([
            'student_id' => '2',
            'user_id' => 4,  
        ]);
        StudentUser::create([
            'student_id' => '2',
            'user_id' => 5,  
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


        // Daftar::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Javascript',
        //     'slug' => 'Javasript',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Memasak',
        //     'slug' => 'memasak',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'basket',
        //     'slug' => 'basket',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'pyton',
        //     'slug' => 'pyton',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 4,
        //     'user_id' => 1,
        //     'title' => 'Seni rupa digital',
        //     'slug' => 'seni-rupa-digital',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Unity',
        //     'slug' => 'unity',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);

        // Daftar::create([
        //     'category_id' => 4,
        //     'user_id' => 1,
        //     'title' => 'macrame',
        //     'slug' => 'macrame',
        //     'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sunt quaerat et a maiores rem enim blanditiis sint similique quibusdam voluptas quisquam, dolorem temporibus dicta asperiores, porro quidem repellendus ut nisi. Perspiciatis et distinctio esse cumque delectus libero iure ut!lorem2fa-rotate-90lorem39 Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellat odio magni tene
        
        //     tur quod praesentium magnam distinctio voluptatum porro qui? Architecto explicabo distinctio eaque earum ea sint, in quod! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse qui placeat itaque inventore voluptas nemo! Cum sed repellat nemo error ullam deleniti quo? Similique facere deserunt suscipit ex, earum eveniet rerum dicta sapiente ipsam adipisci laborum fugit consequuntur repellat.',

        // ]);


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



        Rombel::create([
            'name' => 'PPLG X-1'
        ]); Rombel::create([
            'name' => 'PPLG X-2'
        ]); Rombel::create([
            'name' => 'PPLG X-3'
        ]); Rombel::create([
            'name' => 'PPLG X-4'
        ]); Rombel::create([
            'name' => 'PPLG X-5'
        ]); Rombel::create([
            'name' => 'PPLG X-6'
        ]);

        Rombel::create([
            'name' => 'MPLB X-1'
        ]);
        Rombel::create([
            'name' => 'MPLB X-2'
        ]);  Rombel::create([
            'name' => 'MPLB X-3'
        ]);
        Rombel::create([
            'name' => 'TJKT X-1'
        ]);
        Rombel::create([
            'name' => 'TJKT X-2'
        ]);  Rombel::create([
            'name' => 'TJKT X-3'
        ]);  Rombel::create([
            'name' => 'TJKT X-4'
        ]);

        Rombel::create([
            'name' => 'PPLG XI-1'
        ]);
        Rombel::create([
            'name' => 'PPLG XI-2'
        ]);    Rombel::create([
            'name' => 'PPLG XI-3'
        ]);    Rombel::create([
            'name' => 'PPLG XI-4'
        ]);    Rombel::create([
            'name' => 'PPLG XI-5'
        ]);
    }
}
