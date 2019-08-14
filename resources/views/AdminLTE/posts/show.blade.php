@extends('AdminLTE.layouts.master')
@section('page-title','最新消息')
@section('page-style')
@endsection
@section('page-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $post->title }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">最新消息</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">

                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                                        <a href="#">Admin</a>
                                        </span>
                                        <span class="description">建立時間：{{ $post->created_at }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        {{ $post->content }}
                                    </p>
                                    <br>

                                    <form action="{{route("posts.destroy",$post->id)}}" method="POST">
                                        <a class="btn bg-blue btn-sm" href="{{ asset('/posts') }}">返回</a>
                                        <a class="btn btn-primary btn-sm"
                                           href="{{ asset('/posts/'.$post->id.'/edit') }}">編輯</a>

                                        {{csrf_field()}}
                                        {{method_field("DELETE")}}
                                        <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                                    </form>
                                </div>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('page-version','Version 1.0')