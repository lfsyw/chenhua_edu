<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_link', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(-1)->comment('链接类型');
            $table->string('name')->default('')->comment('链接名称');
            $table->string('url')->default('')->comment('链接地址');
            $table->tinyInteger('order')->default(0)->comment('排序');
            $table->string('remark')->default('')->comment('备注说明');
            $table->date('expired_at')->nullable()->comment('过期时间');
            $table->timestamps();
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
        Schema::dropIfExists('common_link');
    }
}
