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

    /* how to create this file */
    /* php artisan make:migration add_is_active_to_users_table --table=users */

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('is_active')->after('role'); // use this for field after specific column.
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
            $table->dropColumn('is_active');
        });
    }
};
