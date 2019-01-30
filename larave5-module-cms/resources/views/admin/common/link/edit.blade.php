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
                        <form method="POST" class="form-horizontal" action="{{route('admin.common.link.update',['id'=>$field->id])}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @include('admin.common.link._form')
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

    <script src="{{asset('plugins/laydate/laydate.js')}}"></script>
    <script>
        //执行一个laydate实例
        laydate.render({
            elem: 'input[name=expired_at]' //指定元素
        });
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