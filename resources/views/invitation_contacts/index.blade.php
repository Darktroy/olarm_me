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
                <h4 class="mt-5 mb-5">Invitation Contacts</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('invitation_contacts.invitation_contacts.create') }}" class="btn btn-success" title="Create New Invitation Contacts">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($invitationContactsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Invitation Contacts Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Invitation Contacts</th>
                            <th>Phonecode</th>
                            <th>Phone</th>
                            <th>Invited User</th>
                            <th>Invitation Code</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($invitationContactsObjects as $invitationContacts)
                        <tr>
                            <td>{{ $invitationContacts->invitation_contacts_id }}</td>
                            <td>{{ $invitationContacts->phonecode }}</td>
                            <td>{{ $invitationContacts->phone }}</td>
                            <td>{{ optional($invitationContacts->invitedUser)->id }}</td>
                            <td>{{ $invitationContacts->invitation_code }}</td>

                            <td>

                                <form method="POST" action="{!! route('invitation_contacts.invitation_contacts.destroy', $invitationContacts->invitation_contacts_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('invitation_contacts.invitation_contacts.show', $invitationContacts->invitation_contacts_id ) }}" class="btn btn-info" title="Show Invitation Contacts">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('invitation_contacts.invitation_contacts.edit', $invitationContacts->invitation_contacts_id ) }}" class="btn btn-primary" title="Edit Invitation Contacts">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Invitation Contacts" onclick="return confirm(&quot;Delete Invitation Contacts?&quot;)">
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
            {!! $invitationContactsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection