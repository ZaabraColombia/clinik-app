<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('records', function (Blueprint $table) {
            $table->string('reference', 50)->nullable();
            $table->unsignedBigInteger('surgery_id')->nullable();

            $table->foreign('surgery_id')
                ->on('surgeries')
                ->references('id')
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
        Schema::table('records', function (Blueprint $table) {
            $table->dropColumn('reference');
            $table->dropForeign('records_surgery_id_foreign');
            $table->dropColumn('surgery_id');
        });
    }
}
