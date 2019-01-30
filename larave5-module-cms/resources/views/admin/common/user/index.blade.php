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
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-hover">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>用户名</th>
                                <th>Email</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{route('admin.common.user.edit',['id'=>$user->id])}}">编辑</a>
                                    <button class="btn btn-xs btn-danger" onclick="delData(this,'{{$user->id}}')">删除</button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-info text-center">暂无数据</div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                    <div class="ibox-footer">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('admin.includes._delete',['beseUrl'=>route('admin.common.user.index')])
@endsection