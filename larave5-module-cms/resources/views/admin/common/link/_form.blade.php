<div class="form-group @if($errors->has('name')) has-error @endif">
    <label class="col-sm-2 control-label">友链名称</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" value="{{$field->name or old('name')}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('url')) has-error @endif">
    <label class="col-sm-2 control-label">URL</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="url" value="{{$field->url or old('url')}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('remark')) has-error @endif">
    <label class="col-sm-2 control-label">备注</label>
    <div class="col-sm-10">
        <textarea class="form-control" name="remark">{{$field->remark or old('remark')}}</textarea>
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('order')) has-error @endif">
    <label class="col-sm-2 control-label">排序</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="order" value="{{$field->order or old('order',0)}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group @if($errors->has('expired_at')) has-error @endif">
    <label class="col-sm-2 control-label">过期日期</label>
    <div class="col-sm-10">
        <input class="form-control" name="expired_at" value="{{$field->expired_at or old('expired_at',date('Y-m-d',strtotime('+1 month')))}}">
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary" type="submit">保存</button>
        <button class="btn btn-white" type="reset">重置</button>
    </div>
</div>