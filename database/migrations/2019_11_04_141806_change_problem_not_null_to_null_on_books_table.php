<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProblemNotNullToNullOnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('auther')->nullable()->change();
            $table->string('category_name')->nullable()->change();
            $table->string('impressions')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('auther')->nullable(false)->change();
            $table->string('category_name')->nullable(false)->change();
            $table->string('impressions')->nullable(false)->change();
        });
    }
}
