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
                <h4 class="mt-5 mb-5">Companies</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('companies.company.create') }}" class="btn btn-success" title="Create New Company">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($companies) == 0)
            <div class="panel-body text-center">
                <h4>No Companies Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Company Name</th>
                            <th>Company Logo</th>
                            <th>Company Landline</th>
                            <th>Company Fax</th>
                            <th>Company Address</th>
                            <th>Company Website</th>
                            <th>Company About</th>
                            <th>Company Facebook</th>
                            <th>Company Twitter</th>
                            <th>Company Instagram</th>
                            <th>Company Youtube</th>
                            <th>Company Field</th>
                            <th>Company Industry</th>
                            <th>Company Speciality</th>
                            <th>Company Countary</th>
                            <th>Company City</th>
                            <th>Company District</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->company_id }}</td>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->company_logo }}</td>
                            <td>{{ $company->company_landline }}</td>
                            <td>{{ $company->company_fax }}</td>
                            <td>{{ $company->company_address }}</td>
                            <td>{{ $company->company_website }}</td>
                            <td>{{ $company->company_about }}</td>
                            <td>{{ $company->company_facebook }}</td>
                            <td>{{ $company->company_twitter }}</td>
                            <td>{{ $company->company_instagram }}</td>
                            <td>{{ $company->company_youtube }}</td>
                            <td>{{ $company->company_field }}</td>
                            <td>{{ $company->company_industry }}</td>
                            <td>{{ $company->company_speciality }}</td>
                            <td>{{ $company->company_countary }}</td>
                            <td>{{ $company->company_city }}</td>
                            <td>{{ $company->company_district }}</td>

                            <td>

                                <form method="POST" action="{!! route('companies.company.destroy', $company->company_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('companies.company.show', $company->company_id ) }}" class="btn btn-info" title="Show Company">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('companies.company.edit', $company->company_id ) }}" class="btn btn-primary" title="Edit Company">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Company" onclick="return confirm(&quot;Delete Company?&quot;)">
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
            {!! $companies->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection