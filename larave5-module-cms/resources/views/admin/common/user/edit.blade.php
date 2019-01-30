@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>编辑用户</h2>
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
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑用户</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" class="form-horizontal" action="{{route('admin.common.user.update',['id'=>$field->id])}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                <label class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{old('name',$field->name)}}">
                                    @if($errors->has('name'))
                                        <span class="help-block">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$field->email}}" readonly>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('password')) has-error @endif">
                                <label class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password">
                                    @if($errors->has('password'))
                                        <span class="help-block">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                                <label class="col-sm-2 control-label">确认密码</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation">
                                    @if($errors->has('password_confirmation'))
                                        <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                                    @endif
                                </div>
                            </div>
                            @if($field->id == Auth::user()->id)
                            <div class="hr-line-dashed"></div>
                            <div class="form-group @if($errors->has('password_original')) has-error @endif">
                                <label class="col-sm-2 control-label">原密码</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_original">
                                    <span class="help-block">如果修改管理员信息，需要进行原密码验证。</span>
                                    @if($errors->has('password_original'))
                                        <span class="help-block">{{$errors->first('password_original')}}</span>
                                    @endif
                                </div>
                            </div>
                            @endif
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

@endsection