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
                        <th colspan="2">{{ $patient->name }}</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <tr>
                        <td>Patient ID</td>
                        <td>{{ $patient->patient_no }}</td>
                    </tr>    
                    <tr>
                        <td>Nric</td>
                        <td>{{ $patient->nric }}</td>
                    </tr>                
                    <tr>
                        <td>Gender</td>
                        <td>{{ Common::$genders[$patient->gender] }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $patient->phone }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $patient->address }}</td>
                    </tr>  
                    <tr>
                        <td>Postcode</td>
                        <td>{{ $patient->postcode }}</td>
                    </tr>   
                    <tr>
                        <td>City</td>
                        <td>{{ $patient->city }}</td>
                    </tr>  
                    <tr>
                        <td>State</td>
                        <td>{{ Common::$states[$patient->state] }}</td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
        <div class="card-body">
            <a href="{{ route('patient.index') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Back</a>
            <br></br>
        </div>
    </div>
    <br></br>
    @endsection