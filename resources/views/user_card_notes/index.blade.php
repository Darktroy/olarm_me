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
                <h4 class="mt-5 mb-5">User Card Notes</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('user_card_notes.user_card_note.create') }}" class="btn btn-success" title="Create New User Card Note">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($userCardNotes) == 0)
            <div class="panel-body text-center">
                <h4>No User Card Notes Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>User Card Note</th>
                            <th>User</th>
                            <th>Card</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userCardNotes as $userCardNote)
                        <tr>
                            <td>{{ $userCardNote->user_card_note_id }}</td>
                            <td>{{ optional($userCardNote->user)->id }}</td>
                            <td>{{ optional($userCardNote->card)->card_id }}</td>

                            <td>

                                <form method="POST" action="{!! route('user_card_notes.user_card_note.destroy', $userCardNote->user_card_note_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('user_card_notes.user_card_note.show', $userCardNote->user_card_note_id ) }}" class="btn btn-info" title="Show User Card Note">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('user_card_notes.user_card_note.edit', $userCardNote->user_card_note_id ) }}" class="btn btn-primary" title="Edit User Card Note">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete User Card Note" onclick="return confirm(&quot;Click Ok to delete User Card Note.&quot;)">
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
            {!! $userCardNotes->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection