<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_prices', function (Blueprint $table) {
            $table->id();
            
            $table->string("class_room_name");
            $table->string("all_mat_heading_desc");
            $table->longText("all_mat_body_desc");
            $table->tinyInteger("all_mat_body_desc_status")->default(0);
            $table->string("all_mat_img_desc");
            $table->tinyInteger("all_mat_img_desc_status")->default(1);
            $table->string("all_mat_video_desc");
            $table->tinyInteger("all_mat_img_video_status")->default(0);
            $table->string("all_mat_footer_desc");
            $table->string("all_mat_counter_heading");
            $table->string("all_mat_counter_from");
            $table->string("all_mat_counter_to");
            
            $table->string("one_mat_heading_desc");
            $table->longText("one_mat_body_desc");
            
            
            
            $table->string("one_mat_counter_heading");
            $table->string("one_mat_counter_from");
            $table->string("one_mat_counter_to");
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
        Schema::dropIfExists('table_prices');
    }
}
