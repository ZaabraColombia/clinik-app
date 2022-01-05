<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {

            $table->unsignedInteger('code')->nullable();
            $table->string('name', 100);
            $table->unsignedBigInteger('country_id');

            $table->primary(['country_id', 'code'], 'id');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
