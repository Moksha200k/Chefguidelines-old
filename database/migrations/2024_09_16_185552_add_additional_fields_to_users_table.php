<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding additional fields to the 'users' table
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->nullable()->after('phone_number');
            }

            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->default('user')->after('username');
            }

            if (!Schema::hasColumn('users', 'username_verified_at')) {
                $table->timestamp('username_verified_at')->nullable()->after('role');
            }
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
            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }

            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (Schema::hasColumn('users', 'username_verified_at')) {
                $table->dropColumn('username_verified_at');
            }
        });
    }
}
;
