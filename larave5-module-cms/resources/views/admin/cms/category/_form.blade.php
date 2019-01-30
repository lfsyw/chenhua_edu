<div class="col-lg-9">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{{$title}}</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

            <div class="form-group">
                <label class="col-md-2 control-label star">父级分类</label>
                <div class="col-sm-3">
                    <select class="form-control" name="parent_id">
                        <option value="0">顶级分类</option>
                        @foreach($categoryTree as $cate)
                        <option value="{{$cate['id']}}">{!! $cate['_name'] !!}</option>
                        @endforeach
                    </select>
                </div>
                <label class="col-md-2 control-label star">分类类型</label>
                <div class="col-sm-3">
                    <select class="form-control" name="type">
                        @foreach($categoryType as $key => $type)
                        <option value="{{$key}}">{{$type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label star">分类名称</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="name" value=""
                           required>
                </div>
                <label class="col-sm-2 control-label star">别名</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="letter" value=""
                           required>
                </div>
            </div>
            <hr style="margin-bottom: 15px;">
            <div class="form-group">
                <label class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="thumbInp" name="thumb" value="">
                </div>
                <div class="col-md-3">
                    @include('admin.includes.upload_thumb')
                </div>
            </div>
            <hr style="margin-bottom: 15px;">
            <div class="form-group">
                <label class="col-sm-2 control-label star">标题</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value=""
                           required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label star">关键词</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keywords" value=""
                           required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label star">描述</label>
                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" rows="3"
                                              style="resize:vertical;" required></textarea>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>补充信息</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="form-group">
                <label class="col-sm-12">跳转链接 (没有跳转链接，请留空)</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="jump_url" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">分类页模板 (例如'home.list_diy')</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="list_tpl" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">内容页模板目录</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="post_tpl_dir"
                           value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 star">分类状态</label>
                <div class="col-sm-12">
                    @foreach($categoryStatus as $key => $status)
                        <label class="radio-inline">
                            <input type="radio" name="status" value="{{$key}}" @if($key==1) checked @endif > {{$status}}
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>补充内容</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <textarea id="content" name="content" style="width:100%;height:450px;"></textarea>
            @include('kindeditor::editor',['editor'=>'content'])
    </div>
</div>


<button type="submit" class="btn btn-success"><i class="fa fa-fw fa-save"></i> 保存</button>
<button type="reset" class="btn btn-default"><i class="fa fa-fw fa-recycle"></i> 重置</button>

    <div style="height: 50px;"></div>