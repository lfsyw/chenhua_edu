<div class="form-group @if($errors->has('title')) has-error @endif">
    <label class="col-sm-2 control-label">广告标题</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$field->title or old('title')}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('sign')) has-error @endif">
    <label class="col-sm-2 control-label">调用标识</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="sign" value="{{$field->sign or old('sign')}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('code')) has-error @endif">
    <label class="col-sm-2 control-label">广告代码</label>
    <div class="col-sm-10">
        <textarea class="form-control" name="code">{{$field->code or old('code')}}</textarea>
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('begin_at')) has-error @endif">
    <label class="col-sm-2 control-label">起始日期</label>
    <div class="col-sm-10">
        <input class="form-control" name="begin_at"
               value="{{$field->begin_at or old('begin_at',date('Y-m-d'))}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('expired_at')) has-error @endif">
    <label class="col-sm-2 control-label">过期日期</label>
    <div class="col-sm-10">
        <input class="form-control" name="expired_at"
               value="{{$field->expired_at or old('expired_at',date('Y-m-d',strtotime('+1 month')))}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('status')) has-error @endif">
    <label class="col-sm-2 control-label">状态</label>
    <div class="col-sm-10">
        <label class="checkbox-inline">
            <input type="checkbox" name="status" value="1"> 可用
        </label>
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary" type="submit">保存</button>
        <button class="btn btn-white" type="reset">重置</button>
    </div>
</div>