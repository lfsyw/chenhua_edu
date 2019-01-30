@extends('layouts.admin')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{$title}}</h2>
        </div>
        <div class="col-lg-2 text-right p-t-10">
            <a class="btn btn-info btn-md" href="{{route('admin.cms.category.index')}}">分类列表</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <form method="POST" class="form-horizontal" action="{{route('admin.cms.category.store')}}">
                {{csrf_field()}}
                @include('admin.cms.category._form')
            </form>
        </div>
    </div>
@endsection
