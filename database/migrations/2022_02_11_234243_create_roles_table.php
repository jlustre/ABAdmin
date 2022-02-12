<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyInteger('id')->unique();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Member',
            'slug' => 'member',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Merchant',
            'slug' => 'merchant',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'Editor',
            'slug' => 'editor',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 9,
            'name' => 'Admin',
            'slug' => 'admin',
            'created_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
