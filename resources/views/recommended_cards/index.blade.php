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
                <h4 class="mt-5 mb-5">Recommended Cards</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('recommended_cards.recommended_cards.create') }}" class="btn btn-success" title="Create New Recommended Cards">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($recommendedCardsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Recommended Cards Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Recommended Cards</th>
                            <th>Card</th>
                            <th>Recommended By User</th>
                            <th>Recommended For User</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($recommendedCardsObjects as $recommendedCards)
                        <tr>
                            <td>{{ $recommendedCards->recommendedCards_id }}</td>
                            <td>{{ optional($recommendedCards->card)->card_id }}</td>
                            <td>{{ optional($recommendedCards->recommendedByUser)->id }}</td>
                            <td>{{ optional($recommendedCards->recommendedForUser)->id }}</td>

                            <td>

                                <form method="POST" action="{!! route('recommended_cards.recommended_cards.destroy', $recommendedCards->recommendedCards_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('recommended_cards.recommended_cards.show', $recommendedCards->recommendedCards_id ) }}" class="btn btn-info" title="Show Recommended Cards">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('recommended_cards.recommended_cards.edit', $recommendedCards->recommendedCards_id ) }}" class="btn btn-primary" title="Edit Recommended Cards">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Recommended Cards" onclick="return confirm(&quot;Delete Recommended Cards?&quot;)">
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
            {!! $recommendedCardsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection