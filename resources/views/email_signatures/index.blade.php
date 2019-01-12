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
                <h4 class="mt-5 mb-5">Email Signatures</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('email_signatures.email_signature.create') }}" class="btn btn-success" title="Create New Email Signature">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($emailSignatures) == 0)
            <div class="panel-body text-center">
                <h4>No Email Signatures Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Email Signature</th>
                            <th>User</th>
                            <th>Image Name</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($emailSignatures as $emailSignature)
                        <tr>
                            <td>{{ $emailSignature->emailSignature_id }}</td>
                            <td>{{ optional($emailSignature->user)->id }}</td>
                            <td>{{ $emailSignature->imageName }}</td>

                            <td>

                                <form method="POST" action="{!! route('email_signatures.email_signature.destroy', $emailSignature->emailSignature_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('email_signatures.email_signature.show', $emailSignature->emailSignature_id ) }}" class="btn btn-info" title="Show Email Signature">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('email_signatures.email_signature.edit', $emailSignature->emailSignature_id ) }}" class="btn btn-primary" title="Edit Email Signature">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Email Signature" onclick="return confirm(&quot;Delete Email Signature?&quot;)">
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
            {!! $emailSignatures->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection