<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormerRectorsBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('former_rectors_biographies', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable(true);
            $table->string('name_am');
            $table->string('name_ru')->nullable(true);
            $table->string('position_en')->nullable(true);
            $table->string('position_am');
            $table->string('position_ru')->nullable(true);
            $table->text('biography_en')->nullable(true);
            $table->text('biography_am');
            $table->text('biography_ru')->nullable(true);
            $table->string('img');
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
        Schema::dropIfExists('former_rectors_biographies');
    }
}
