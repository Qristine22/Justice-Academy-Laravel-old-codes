<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_lectures', function (Blueprint $table) {
            $table->id();
            $table->string('topic_en')->nullable(true);
            $table->string('topic_am');
            $table->string('topic_ru')->nullable(true);
            $table->string('lecturer_en')->nullable(true);
            $table->string('lecturer_am');
            $table->string('lecturer_ru')->nullable(true);
            $table->tinyText('video');
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
        Schema::dropIfExists('video_lectures');
    }
}
