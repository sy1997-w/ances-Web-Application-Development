<?php
use App\Common;
?>
@extends('layouts.app')

    @section('content')
    <!-- Bootstrap Boilerplate... -->
        <div class="panel-body">
        <a href="{{ route('patient.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Add a Patient</a>
        <br></br>
        @if (count($patients) > 0)
            <table class="table table-striped task-table">
                <!-- Table Headings -->
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Patient ID</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($patients as $i => $patient)
                        <tr>
                            <td class="table-text">
                                <div>{{ $i+1 }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $patient->name }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ Common::$genders[$patient->gender] }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $patient->patient_no }}</div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {!! link_to_route('patient.show',$title = 'View',$parameters = ['id' => $patient->id,]) !!}
                                    |
                                    {!! link_to_route('patient.edit',$title = 'Edit',$parameters = ['id' => $patient->id,]) !!}
                                    |
                                    <!--{!!Form::open(['method' => 'DELETE', 'route' => ['patient.destroy', $patient->id]]) !!}{!!Form::submit('Delete')!!}-->
                                        <a href="{{ route('patient.delete', $patient->id) }}">Delete</a>
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