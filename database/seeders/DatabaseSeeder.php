<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Passenger;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create(['email' => 'admin1@gmail.com','name' => 'Admin1','license'=> '12345678','phone'=> '1234567890', 'address' => 'home', 'password' => bcrypt('admin1')]);

        User::create(['email' => 'admin2@gmail.com','name' => 'Admin2','license'=> '87654321','phone'=> '0987654321', 'address' => 'home sweet home', 'password' => bcrypt('admin2')]);

        Category::create(['name' => 'Car only','slug' => 'car-only']);

        Category::create(['name' => 'Car and Driver','slug' => 'car-and-driver']);

        Passenger::create(['name' => '4 Passenger','slug' => '4-passenger']);

        Passenger::create(['name' => '6 Passenger','slug' => '6-passenger']);

        Post::create(['brand' => 'Toyota','model' => 'Fortuner', 'slug' => 'bn-1234-ap', 'rental_rate' => 'Rp500.000/day', 'number_plate' => 'BN 1234 AP','user_id' => '1', 'category_id' => '1','passenger_id' => '1']); 

        Post::create(['brand' => 'Toyota','model' => 'Inova', 'slug' => 'bn-4321-ap', 'rental_rate' => 'Rp400.000/day', 'number_plate' => 'BN 4321 AP','user_id' => '1', 'category_id' => '1','passenger_id' => '2']);

        Post::create(['brand' => 'Toyota','model' => 'Alphard', 'slug' => 'bn-5678-ap', 'rental_rate' => 'Rp1.000.000/day', 'number_plate' => 'BN 5678 AP','user_id' => '2', 'category_id' => '2','passenger_id' => '1']);

        Post::create(['brand' => 'Honda','model' => 'Civic', 'slug' => 'bn-8765-ap', 'rental_rate' => 'Rp750.000/day', 'number_plate' => 'BN 8765 AP','user_id' => '2', 'category_id' => '1','passenger_id' => '1']); 

        Post::create(['brand' => 'Honda','model' => 'CRV', 'slug' => 'bn-6789-ap', 'rental_rate' => 'Rp500.000/day', 'number_plate' => 'BN 6789 AP','user_id' => '2', 'category_id' => '1','passenger_id' => '1']);

        Post::create(['brand' => 'Mitsubishi','model' => 'Xpander', 'slug' => 'bn-9876-ap', 'rental_rate' => 'Rp350.000/day', 'number_plate' => 'BN 9876 AP','user_id' => '1', 'category_id' => '2','passenger_id' => '2']);

        Post::create(['brand' => 'Toyota','model' => 'Fortuner', 'slug' => 'bn-2345-ap', 'rental_rate' => 'Rp700.000/day', 'number_plate' => 'BN 2345 AP','user_id' => '1', 'category_id' => '2','passenger_id' => '1']); 

        Post::create(['brand' => 'Toyota','model' => 'Inova', 'slug' => 'bn-5432-ap', 'rental_rate' => 'Rp600.000/day', 'number_plate' => 'BN 5432 AP','user_id' => '1', 'category_id' => '2','passenger_id' => '2']);

        Post::create(['brand' => 'Honda','model' => 'Civic', 'slug' => 'bn-7654-ap', 'rental_rate' => 'Rp1.000.000/day', 'number_plate' => 'BN 7654 AP','user_id' => '2', 'category_id' => '2','passenger_id' => '1']); 

        Post::create(['brand' => 'Honda','model' => 'CRV', 'slug' => 'bn-7890-ap', 'rental_rate' => 'Rp700.000/day', 'number_plate' => 'BN 7890 AP','user_id' => '2', 'category_id' => '2','passenger_id' => '1']);

        Post::create(['brand' => 'Mitsubishi','model' => 'Xpander', 'slug' => 'bn-1289-ap', 'rental_rate' => 'Rp550.000/day', 'number_plate' => 'BN 1289 AP','user_id' => '1', 'category_id' => '2','passenger_id' => '2']);
    }
}