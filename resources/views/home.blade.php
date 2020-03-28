@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <br>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('isSuperAdmin')
                    <div class="alert alert-info">
                        <strong>Welcome!</strong> You are logged in as Super Admin.
                        <p>You are granted permision to:</p>
                        <ul>
                            <li>Update Patient / Doctor / Appointment.</li>
                            <li>Delete Patient / Doctor / Appointment.</li>
                        </ul>
                    </div>
                    @else
                    <div class="alert alert-info">
                        <strong>Welcome!</strong> You are logged in as Admin.
                        <p>You are granted permision to:</p>
                        <ul>
                            <li>View details of Patient / Doctor / Appointment.</li>
                            <li>Create new Patient / Doctor / Appointment.</li>
                        </ul>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
