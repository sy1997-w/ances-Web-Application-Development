<?php
use App\Common;
use App\Doctor;
use App\Patient;
use App\Visit;
?>
@extends('layouts.app')

    @section('content')

    <!-- Bootstrap Boilerplate... -->
        <div class="card b-10">
        <div class="card-body">
        <div class="panel-body">
            <table class="table table-striped task-table">
                <!-- Table Headings -->
                <thead>
                    <tr>
                        <th colspan="2">#{{ $visit->code }}</th>
                    </tr>
                </thead>
               <!-- Table Body -->
                <tbody>
                    <tr>
                        <td>Appointment Date</td>
                        <td>{{ $visit->date }}</td><div>
                    </tr>
                    <tr>
                        <td>Appointment Time</td>
                        <td>{{ $visit->time }}</td>
                    </tr>
                    <tr>
                        <td>Doctor</td>
                        <td>Dr. {{ Doctor::pluck('name','id')[$visit->doctor_id] }}</div></td>
                    </tr>
                    <tr>
                        <td>Patient</td>
                        <td>{{ Patient::pluck('name','id')[$visit->patient_id] }}</div></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{!! nl2br($visit->description) !!}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ Common::$statues[$visit->statue] }}</td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="card-body">
        <a href="{{ route('visit.index') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Back</a>
        <br></br>
    </div>
</div>
<br></br>
@endsection