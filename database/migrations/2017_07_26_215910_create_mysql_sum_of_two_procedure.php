<?php

use Illuminate\Support\Facades\Schema;
use App\SumOfTwoMySQL;
use Illuminate\Database\Migrations\Migration;

class CreateMysqlSumOfTwoProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            \DB::connection('mysql')
              ->unprepared(file_get_contents(__DIR__.'/sumoftwo.sql'));

        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        try {
            \DB::connection('mysql')
              ->unprepared('DROP PROCEDURE IF EXISTS sumoftwoproc');
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


    }
}
