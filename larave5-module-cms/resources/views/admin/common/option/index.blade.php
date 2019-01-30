@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>全部用户</h2>
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
            <a class="btn btn-info btn-md" href="{{route('admin.common.option.create')}}">添加配置项</a>
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
                    <form action="{{url('admin/common/option/updateValue')}}" method="POST" class="form-horizontal">
                    {{csrf_field()}}
                        <div class="ibox-content">
                        @forelse($options as $option)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{$option->title}} <a href="{{route('admin.common.option.edit',['id'=>$option->id])}}"><i class="fa fa-edit"></i></a> <br/>{{$option->name}}</label>
                                <div class="col-sm-10">
                                    {!! $option->html !!}
                                    {{--<input type="text" class="form-control" name="title" value="{{old('title')}}">--}}
                                    <span class="help-block">{{$option->remark}}</span>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info">没有数据</div>
                        @endforelse
                    </div>
                    <div class="ibox-footer">
                        <button type="submit" class="btn btn-info">保存</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script src="{{asset('plugins/layer/layer.js')}}"></script>
    <script>
        function delData(obj,id) {
            //询问框
            layer.confirm('确认需要删除该用户吗？', {
                btn: ['确认','取消'] //按钮
            }, function(){
                $.post("{{url('admin/user')}}/"+id,{"_method":"DELETE","_token":"{{csrf_token()}}"},function (data) {
                    if(!data.err_code){
                        $(obj).parents('tr').eq(0).remove();
                        layer.msg(data.err_msg, {icon: 1});
                    }
                },'json');
            }, function(){

            });
        }
    </script>
@endsection