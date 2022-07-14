<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_staff', function (Blueprint $table) {
            $table->id();
            $table->string('position_en')->nullable(true);
            $table->string('position_am')->nullable(true);
            $table->string('position_ru')->nullable(true);
            $table->text('name_en')->nullable(true);
            $table->text('name_am')->nullable(true);
            $table->text('name_ru')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('mail')->nullable(true);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_staff');
    }
}
