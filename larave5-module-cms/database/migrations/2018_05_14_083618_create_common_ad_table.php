<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_ad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('标题');
            $table->string('sign')->default('')->comment('调用标识');
            $table->text('targets')->nullable()->comment('投放范围'); //用于存储个性化广告设置参数
            $table->tinyInteger('type')->default(-1)->comment('广告类型'); //目前只有代码类型
            $table->text('param')->nullable()->comment('序列化参数'); //用于多媒体类广告参数配置
            $table->text('code')->nullable()->comment('生成广告代码');
            $table->tinyInteger('status')->default(-1)->comment('是否可用');
            $table->date('begin_at')->nullable()->comment('广告起始时间');
            $table->date('expired_at')->nullable()->comment('结束时间');
            $table->timestamps();
            $table->softDeletes();

            $table->index('sign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_ad');
    }
}
