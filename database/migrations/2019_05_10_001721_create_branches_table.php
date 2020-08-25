<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('officer_in_charge');
            $table->enum('company', array('nhfc', 'gtlic'));
            $table->string('region');
            $table->text('address');
            $table->string('telephone_no')->default(0);
            $table->string('fax_no')->default(0);
            $table->string('cellphone_no')->default(0);
            $table->string('created_by');
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
        Schema::dropIfExists('branches');
    }
}
