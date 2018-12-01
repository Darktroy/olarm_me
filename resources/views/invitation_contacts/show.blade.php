@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Invitation Contacts' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('invitation_contacts.invitation_contacts.destroy', $invitationContacts->invitation_contacts_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('invitation_contacts.invitation_contacts.index') }}" class="btn btn-primary" title="Show All Invitation Contacts">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('invitation_contacts.invitation_contacts.create') }}" class="btn btn-success" title="Create New Invitation Contacts">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('invitation_contacts.invitation_contacts.edit', $invitationContacts->invitation_contacts_id ) }}" class="btn btn-primary" title="Edit Invitation Contacts">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Invitation Contacts" onclick="return confirm(&quot;Delete Invitation Contacts??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Invitation Contacts</dt>
            <dd>{{ $invitationContacts->invitation_contacts_id }}</dd>
            <dt>Phonecode</dt>
            <dd>{{ $invitationContacts->phonecode }}</dd>
            <dt>Phone</dt>
            <dd>{{ $invitationContacts->phone }}</dd>
            <dt>Invited User</dt>
            <dd>{{ optional($invitationContacts->invitedUser)->id }}</dd>
            <dt>Invitation Code</dt>
            <dd>{{ $invitationContacts->invitation_code }}</dd>

        </dl>

    </div>
</div>

@endsection