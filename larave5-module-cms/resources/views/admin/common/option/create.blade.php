@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{$title}}</h2>
            {{--<ol class="breadcrumb">--}}
            {{--<li>--}}
            {{--<a href="index.html">Home</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a>Tables</a>--}}
            {{--</li>--}}
            {{--<li class="active">--}}
            {{--<strong>Static Tables</strong>--}}
            {{--</li>--}}
            {{--</ol>--}}
        </div>
        <div class="col-lg-2 text-right p-t-10">
            <a class="btn btn-info btn-md" href="{{route('admin.common.option.index')}}">配置项列表</a>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
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
                        <form method="POST" class="form-horizontal" action="{{route('admin.common.option.store')}}">
                            {{csrf_field()}}
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label class="col-sm-2 control-label">中文名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                <label class="col-sm-2 control-label">配置项</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('field_type')) has-error @endif">
                                <label class="col-sm-2 control-label">字段类型</label>
                                <div class="col-sm-10">
                                    @foreach($fieldType as $type)
                                    <label class="checkbox-inline">
                                        <input type="radio" name="field_type" value="{{$type}}" onclick="changeType()"
                                        @if(old('field_type','input')==$type) checked @endif
                                        > {{$type}}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="field_value" style="display:none;">
                                <div class="form-group @if($errors->has('field_value')) has-error @endif">
                                    <label class="col-sm-2 control-label">字段修饰</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="field_value">{{old('field_value')}}</textarea>
                                        <span class="help-block">格式示例 1:开启|2:关闭</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            </div>
                            <div class="form-group @if($errors->has('order')) has-error @endif">
                                <label class="col-sm-2 control-label">排序</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="order" value="{{old('order',0)}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('remark')) has-error @endif">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="remark">{{old('remark')}}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存</button>
                                    <button class="btn btn-white" type="reset">重置</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('plugins/layer/layer.js')}}"></script>
    <script>
        if('{{$errors->first()}}'){
            layer.alert('{{$errors->first()}}')
        }
    </script>

@endsection

@section('footer')
    <script>
        $(function () {
            changeType();
        });
        function changeType() {
            var field_type = $('input[name=field_type]:checked').val()
            if(field_type=='radio'){
                $('div.field_value').show();
            }else{
                $('div.field_value').hide();
            }
        }
    </script>
@endsection