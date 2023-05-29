@extends('admin.layout.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Messages</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Inbox</h3>
                            </div>

                            <div class="card-body p-0">

                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        @foreach(collect($msg)->unique('from') as $message)

                                            @if($message->to === $data->id)
                                                <tr>
                                                    <td class="mailbox-subject"><img src="{{$users[$message->from-1]->image}}" class="img-circle elevation-2" alt="User Image" style="width: 3rem; height: 3rem"></td>
                                                    <td class="mailbox-name"><a href="{{url('admin/chat-box/'.$users[$message->from-1]->id)}}">{{$users[$message->from-1]->first_name.' '.$users[$message->from-1]->last_name}}</a></td>
                                                    <td class="mailbox-subject">{{Str::words($message->message, 5) }}</td>
                                                    <td class="mailbox-date">{{\Carbon\Carbon::parse($message->created_at)->format('D, d M H:i')}}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                            <div class="card-footer p-0"></div>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
