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
                <h4 class="mt-5 mb-5">Card To Interests</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('card_to_interests.card_to_interests.create') }}" class="btn btn-success" title="Create New Card To Interests">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($cardToInterestsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Card To Interests Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Card To Interest</th>
                            <th>Interest</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Private</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cardToInterestsObjects as $cardToInterests)
                        <tr>
                            <td>{{ optional($cardToInterests->cardToInterest)->id }}</td>
                            <td>{{ optional($cardToInterests->interest)->id }}</td>
                            <td>{{ $cardToInterests->name }}</td>
                            <td>{{ optional($cardToInterests->user)->id }}</td>
                            <td>{{ $cardToInterests->private }}</td>

                            <td>

                                <form method="POST" action="{!! route('card_to_interests.card_to_interests.destroy', $cardToInterests->card_to_interest_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('card_to_interests.card_to_interests.show', $cardToInterests->card_to_interest_id ) }}" class="btn btn-info" title="Show Card To Interests">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('card_to_interests.card_to_interests.edit', $cardToInterests->card_to_interest_id ) }}" class="btn btn-primary" title="Edit Card To Interests">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Card To Interests" onclick="return confirm(&quot;Delete Card To Interests?&quot;)">
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
            {!! $cardToInterestsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection