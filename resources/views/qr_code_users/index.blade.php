@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Qr Code Users</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('qr_code_users.qr_code_user.create') }}" class="btn btn-success" title="Create New Qr Code User">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($qrCodeUsers) == 0)
            <div class="panel-body text-center">
                <h4>No Qr Code Users Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Qr Code User</th>
                            <th>User</th>
                            <th>Card</th>
                            <th>code</th>
                            <th>Begain At</th>
                            <th>Ended At</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($qrCodeUsers as $qrCodeUser)
                        <tr>
                            <td>{{ optional($qrCodeUser->qrCodeUser)->id }}</td>
                            <td>{{ optional($qrCodeUser->user)->id }}</td>
                            <td>{{ optional($qrCodeUser->card)->id }}</td>
                            <td>{{ $qrCodeUser->code }}</td>
                            <td>{{ $qrCodeUser->begain_at }}</td>
                            <td>{{ $qrCodeUser->ended_at }}</td>

                            <td>

                                <form method="POST" action="{!! route('qr_code_users.qr_code_user.destroy', $qrCodeUser->qr_code_user_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('qr_code_users.qr_code_user.show', $qrCodeUser->qr_code_user_id ) }}" class="btn btn-info" title="Show Qr Code User">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('qr_code_users.qr_code_user.edit', $qrCodeUser->qr_code_user_id ) }}" class="btn btn-primary" title="Edit Qr Code User">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Qr Code User" onclick="return confirm(&quot;Click Ok to delete Qr Code User.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $qrCodeUsers->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection