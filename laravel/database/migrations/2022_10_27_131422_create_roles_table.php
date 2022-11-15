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
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();

        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')
                ->nullable();

            $table->foreign("role_id")
                ->references("id")->on("roles")
                ->onUpdate("cascade")
                ->onDelete("set null");

        });
        Artisan::call("db:seed",[
            "--class" => "RoleSeeder",
            "--force" => true
        ]);


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::portable('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColum('role_id');
        });
        Schema::dropIfExists('roles');
    }







};
