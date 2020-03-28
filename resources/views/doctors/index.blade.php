<?php
use App\Common;
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
        <a href="{{ route('doctor.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Add a Doctor</a>
        <br></br>
        @if (count($doctors) > 0)
            <table class="table table-striped task-table">
                <!-- Table Headings -->
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Doctor ID</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($doctors as $i => $doctor)
                        <tr>
                            <td class="table-text">
                                <div>{{ $i+1 }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $doctor->name }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ Common::$genders[$doctor->gender] }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $doctor->doctor_no }}</div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {!! link_to_route('doctor.show',$title = 'View',$parameters = ['id' => $doctor->id,]) !!}
                                    |
                                    {!! link_to_route('doctor.edit',$title = 'Edit',$parameters = ['id' => $doctor->id,]) !!}
                                    |
                                    <!--{!!Form::open(['method' => 'DELETE', 'route' => ['doctor.destroy', $doctor->id]]) !!}{!!Form::submit('Delete')!!}-->
                                        <a href="{{ route('doctor.delete', $doctor->id) }}">Delete</a>
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