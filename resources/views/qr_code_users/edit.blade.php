@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Qr Code User' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('qr_code_users.qr_code_user.index') }}" class="btn btn-primary" title="Show All Qr Code User">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('qr_code_users.qr_code_user.create') }}" class="btn btn-success" title="Create New Qr Code User">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('qr_code_users.qr_code_user.update', $qrCodeUser->qr_code_user_id) }}" id="edit_qr_code_user_form" name="edit_qr_code_user_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('qr_code_users.form', [
                                        'qrCodeUser' => $qrCodeUser,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection