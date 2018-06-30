<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('certificate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('certificate_id')->unique();
            $table->string('index_no');
            $table->string('school');
            $table->string('type');
            $table->string('grade');
            $table->integer('year_from');
            $table->integer('year_to');
            $table->integer('owner');
            $table->integer('owner_name');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');
            $table->string('status')->default('Pending Verification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop("certificate");
    }
}
