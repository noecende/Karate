<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) 
        {
            $table->unsignedBigInteger('dojo_id'); //La columna de la llave foránea. 
            //La llave foránea hace referencia a la columna id de la tabla dojos
            $table->foreign('dojo_id')->references('id')->on('dojos'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) 
        {
            $table->dropColumn('dojo_id');
        });
    }
}
