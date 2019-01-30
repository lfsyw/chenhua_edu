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
            <a class="btn btn-info btn-md" href="{{route('admin.common.link.create')}}">添加友情链接</a>
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

                        <table class="table table-hover">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>链接名称</th>
                                <th>URL</th>
                                <th>过期时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($links as $link)
                                <tr>
                                    <td>{{$link->id}}</td>
                                    <td>{{$link->name}}</td>
                                    <td>{{$link->url}}</td>
                                    <td>{{$link->expired_at}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{route('admin.common.link.edit',['id'=>$link->id])}}">编辑</a>
                                        <button class="btn btn-xs btn-danger" onclick="delData(this,'{{$link->id}}')">删除</button>
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
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('admin.includes._delete',['beseUrl'=>route('admin.common.link.index')])
@endsection