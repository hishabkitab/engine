<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTypeOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_type_office', function (Blueprint $table) {
            $table->foreignId('business_type_id')->constrained('business_types');
            $table->foreignId('office_id')->constrained('offices');
            $table->primary(['business_type_id', 'office_id']);
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
        Schema::dropIfExists('business_type_office');
    }
}
