<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Cart_product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        // فراخوانی سیدر شهرها
        $this->call([
            CitySeeder::class,
        ]);
    

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //     $role=new Role();
    //     $role->name='admin';
    //     $role->save();

    //     $role=new Role();
    //     $role->name='user';
    //     $role->save();

    //     $user=new User();
    //     $user->name='tahere';
    //     $user->family='dadgar';
    //     $user->mobile='09130983025';
    //     $user->password='3025';
    //     $user->save();

    //     $role=Role::where('name','admin')->first();
    //     $user->addRole($role);

    //     $user=new User();
    //     $user->name='zahra';
    //     $user->family='dadgar';
    //     $user->mobile='09308205179';
    //     $user->password='5179';
    //     $user->save();

    //     $role=Role::where('name','user')->first();
    //     $user->addRole($role);

    //     $user=new User();
    //     $user->name='ali';
    //     $user->family='dadgar';
    //     $user->mobile='09133534843';
    //     $user->password='4843';
    //     $user->save();

    //     $role=Role::where('name','user')->first();
    //     $user->addRole($role);

    //     $cat=new Category();
    //     $cat->name='شال';
    //     $cat->save();

    //     $cat=new Category();
    //     $cat->name='روسری';
    //     $cat->save();

    //     $cat=new Category();
    //     $cat->name='جوراب';
    //     $cat->save();


    //     $prod=new Product();
    //     $prod->name='شال نخی';
    //     $prod->price='188000';
    //     $prod->cat_id='2';
    //     $prod->off='0';
    //     $prod->save();
    
    //     $prod=new Product();
    //     $prod->name='شال حریر';
    //     $prod->price='198000';
    //     $prod->cat_id='3';
    //     $prod->off='0';
    //     $prod->save();

    //     $prod=new Product();
    //     $prod->name='روسری چروک';
    //     $prod->price='225000';
    //     $prod->cat_id='1';
    //     $prod->off='0';
    //     $prod->save();

    //     $prod=new Product();
    //     $prod->name='جوراب نخی';
    //     $prod->price='225000';
    //     $prod->cat_id='3';
    //     $prod->off='0';
    //     $prod->save();

    //     $prod=new Product();
    //     $prod->name='روسری مخمل';
    //     $prod->price='225000';
    //     $prod->cat_id='2';
    //     $prod->off='0';
    //     $prod->save();


    //     $cart=new Cart();
    //     $cart->user_id='1';
    //     $cart->status='0';
    //     $cart->save();

    //     $cart=new Cart();
    //     $cart->user_id='2';
    //     $cart->status='0';
    //     $cart->save();

    //     $cart=new Cart();
    //     $cart->user_id='3';
    //     $cart->status='0';
    //     $cart->save();

    //     $cart_p=new Cart_product();
    //     $cart_p->cart_id='1';
    //     $cart_p->product_id='2';
    //     $cart_p->price='188000';
    //     $cart_p->number='2';
    //     $cart_p->off='0';
    //     $cart_p->save();
     
    //     $cart_p=new Cart_product();
    //     $cart_p->cart_id='1';
    //     $cart_p->product_id='3';
    //     $cart_p->price='158000';
    //     $cart_p->number='1';
    //     $cart_p->off='0';
    //     $cart_p->save();

    //     $cart_p=new Cart_product();
    //     $cart_p->cart_id='2';
    //     $cart_p->product_id='4';
    //     $cart_p->price='88000';
    //     $cart_p->number='3';
    //     $cart_p->off='0';
    //     $cart_p->save();
    }
}
