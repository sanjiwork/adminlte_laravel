@extends('AdminLTE.layouts.master')
@section('page-title','修改- 最新消息')
@section('page-style')
@endsection
@section('page-content')
    <!-- Content Wrapper. Contains page content -->
    <form action="{{route("posts.update",$post->id)}}" method="POST"><!--{{url('posts')}}-->
        {{csrf_field()}}
        {{method_field("PATCH")}}

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
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
                                    @if ($errors->any())
                                        <div class="callout callout-danger">
                                            <h4>修改失敗!</h4>
                                            @foreach ($errors->all() as $error)
                                                <li> {{$error}}</li>
                                            @endforeach
                                        </div>
                                @endif
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="form-group">
                                            <label for="title">主旨</label>
                                            <input id="title" name="title" type="text" class="form-control"
                                                   placeholder="請輸入主旨" value="{{$post->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="content">內容</label>
                                            <textarea id="content" name="content" class="form-control" rows="5"
                                                      placeholder="請輸入 ...">{{$post->content}}</textarea>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary">儲存</button>

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
    </form>
    <!-- /.content-wrapper -->
@endsection
@section('page-version','Version 1.0')