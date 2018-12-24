@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Company' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('companies.company.destroy', $company->company_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('companies.company.index') }}" class="btn btn-primary" title="Show All Company">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('companies.company.create') }}" class="btn btn-success" title="Create New Company">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('companies.company.edit', $company->company_id ) }}" class="btn btn-primary" title="Edit Company">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Company" onclick="return confirm(&quot;Delete Company??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Company</dt>
            <dd>{{ $company->company_id }}</dd>
            <dt>Company Name</dt>
            <dd>{{ $company->company_name }}</dd>
            <dt>Company Logo</dt>
            <dd>{{ $company->company_logo }}</dd>
            <dt>Company Landline</dt>
            <dd>{{ $company->company_landline }}</dd>
            <dt>Company Fax</dt>
            <dd>{{ $company->company_fax }}</dd>
            <dt>Company Address</dt>
            <dd>{{ $company->company_address }}</dd>
            <dt>Company Website</dt>
            <dd>{{ $company->company_website }}</dd>
            <dt>Company About</dt>
            <dd>{{ $company->company_about }}</dd>
            <dt>Company Facebook</dt>
            <dd>{{ $company->company_facebook }}</dd>
            <dt>Company Twitter</dt>
            <dd>{{ $company->company_twitter }}</dd>
            <dt>Company Instagram</dt>
            <dd>{{ $company->company_instagram }}</dd>
            <dt>Company Youtube</dt>
            <dd>{{ $company->company_youtube }}</dd>
            <dt>Company Field</dt>
            <dd>{{ $company->company_field }}</dd>
            <dt>Company Industry</dt>
            <dd>{{ $company->company_industry }}</dd>
            <dt>Company Speciality</dt>
            <dd>{{ $company->company_speciality }}</dd>
            <dt>Company Countary</dt>
            <dd>{{ $company->company_countary }}</dd>
            <dt>Company City</dt>
            <dd>{{ $company->company_city }}</dd>
            <dt>Company District</dt>
            <dd>{{ $company->company_district }}</dd>

        </dl>

    </div>
</div>

@endsection