
<?php
use App\Common;
use App\Doctor;
use App\Patient;
use App\Visit;
?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
    @if(Session::has('msg'))
        <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('msg')}}</strong> Permission not granted.
        </div>
    @endif
    <a href="{{ route('visit.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Add an Appointment</a>
    <br></br>
    @if (count($visits) > 0)
        <table class="table table-striped task-table">
            <!-- Table Headings -->
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Statue</th>
                    <th>Action</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($visits as $i => $visit)
                    <tr>
                        <td class="table-text">
                            <div>{{ $i+1 }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $visit->code }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $visit->date }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $visit->time }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ Common::$statues[$visit->statue] }}</div>
                        </td>
                        <td class="table-text">
                            <div>
                                {!! link_to_route('visit.show',$title = 'View',$parameters = ['id' => $visit->id,]) !!}
                                |
                                {!! link_to_route('visit.edit',$title = 'Edit',$parameters = ['id' => $visit->id,]) !!}
                                |
                                <!--{!!Form::open(['method' => 'DELETE', 'route' => ['visit.destroy', $visit->id]]) !!}{!!Form::submit('Delete')!!}-->
                                    <a href="{{ route('visit.delete', $visit->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div>
            No records found...
        </div>
    @endif
    </div>
@endsection