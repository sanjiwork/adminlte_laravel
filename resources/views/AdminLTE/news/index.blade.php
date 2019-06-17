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
                最新消息
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">最新消息</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                <a href="{{ url('/news.html/create/0') }}" class="btn  btn-sm btn-success">
                                    新增資料</a>

                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>功能</th>
                                    <th>主旨</th>
                                    <th>發佈人員</th>
                                    <th>點閱次數</th>
                                    <th>發佈時間</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <a href="{{ url('/news.html/delete/'.$post->id) }}" class="btn btn-sm btn-danger">
                                            刪除</a>
                                        <a href="{{ url('/news.html/update/'.$post->id) }}" class="btn  btn-sm btn-info">
                                            修改</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/news.html/'.$post->id) }}">
                                        {{ $post->title }}</a></td>
                                    <td>Admin</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->created_at }}</td>

                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>功能</th>
                                    <th>主旨</th>
                                    <th>發佈人員</th>
                                    <th>點閱次數</th>
                                    <th>發佈時間</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

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