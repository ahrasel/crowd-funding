<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->bigInteger('campaign_category_id')->unsigned()->index()->nullable();
            $table->string('description', 1500)->nullable();
            $table->string('documents', 1000)->nullable();
            $table->double('target_amount', 11, 2)->nullable()->default(0.00);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_authenticated')->default(false);
            $table->boolean('is_close')->default(false);
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->bigInteger('approved_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('campaign_category_id')->references('id')->on('campaign_categories')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('approved_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
