<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_option', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(-1)->comment('配置项类型');
            $table->string('title')->default('')->comment('配置项中文名');
            $table->string('name')->comment('配置项'); //不能为空
            $table->text('value')->nullable()->comment('配置值');
            $table->text('param')->nullable()->comment('字段修饰参数');
            $table->tinyInteger('order')->default(0)->comment('排序');
            $table->string('remark')->default('')->comment('备注');
            $table->timestamps();
            $table->softDeletes();

            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_option');
    }
}
