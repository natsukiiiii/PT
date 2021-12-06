<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEmailAndPasswordAddTokenAndAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('email')->nullable();
            // $table->string('password')->nullable();
            $table->string('token')->nullable();
            $table->text('avatar')->nullable();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->string('specialized')->nullable();
            $table->string('about')->nullable();
            $table->string('sns_url')->nullable();
            $table->string('facebook_id')->nullable()->unique();
            $table->string('twitter_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('email')->nullable(false);
            // $table->string('password')->nullable(false);
            // $table->dropColumn('token');
            // $table->dropColumn('avatar');
            // $table->dropColumn('facebook_id');
            Schema::dropIfExists('password_resets');
        });
    }
}
