<?php
use App\Common;
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
                        <th colspan="2">Dr. {{ $doctor->name }}</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <tr>
                        <td>Doctor ID</td>
                        <td>{{ $doctor->doctor_no }}</td>
                    </tr>
                    <tr>
                        <td>NRIC No.</td>
                        <td>{{ $doctor->nric }}</td>
                    </tr>                    <tr>
                        <td>Gender</td>
                        <td>{{ Common::$genders[$doctor->gender] }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $doctor->phone }}</td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td>{!! nl2br($doctor->education) !!}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{!! nl2br($doctor->description) !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="card-body">
            <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Back</a>
            <br></br>
        </div>
    </div>
    <br></br>
    @endsection