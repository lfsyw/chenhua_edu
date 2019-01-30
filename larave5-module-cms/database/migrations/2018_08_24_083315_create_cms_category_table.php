<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->comment('父级id');
            $table->tinyInteger('type')->default(-1)->comment('类型');

            $table->string('name')->default('')->comment('名称');
            $table->string('letter')->default('')->comment('别名');

            $table->string('title')->default('')->comment('标题');
            $table->string('keywords')->default('')->comment('关键词');
            $table->string('description')->default('')->comment('描述');

            $table->string('thumb')->default('')->comment('封面图');
            $table->text('content')->nullable()->comment('内容');

            $table->tinyInteger('order')->default(0)->comment('排序');
            $table->integer('hits')->default(0)->comment('点击数');

            $table->string('jump_url')->default('')->comment('跳转链接');

            $table->string('list_tpl')->default('')->comment('分类页面模板');
            $table->string('post_tpl_dir')->default('')->comment('内容页面模板目录');

            $table->tinyInteger('status')->default(1)->comment('状态');

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
        Schema::dropIfExists('cms_category');
    }
}
