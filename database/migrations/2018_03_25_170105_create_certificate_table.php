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
            $table->integer('uploader_id')->unsigned();
            $table->foreign('uploader_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('certificate_id')->unique();
            $table->string('index_no');
            $table->string('school')->index();
            $table->foreign('school')->references('org_name')->on('institutions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->string('grade');
            $table->integer('year_from');
            $table->integer('year_to');
            $table->string('filename');
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
