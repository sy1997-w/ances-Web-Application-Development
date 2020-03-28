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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- New Visit Form -->
        {!! Form::model($visit, [ 'route' => ['visit.store'], 'class' => 'form-horizontal' ]) !!}

        <!-- Visit Code -->
        <div class="form-group row">
            {!! Form::label('visit-code', 'Appointment ID', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('code', null, ['id' => 'visit-code','class' => 'form-control','maxlength' => 9,]) !!}
                <small class="form-text text-muted">Format: APT-XXXXX </small>
            </div>
        </div>

        <!-- Visit Date -->
        <div class="form-group row">
            {!! Form::label('visit-date', 'Appointment_date', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::date('date', null, ['id' => 'visit-date','class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Visit Time -->
        <div class="form-group row">
            {!! Form::label('visit-time', 'Appointment_time', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::time('time', null, ['id' => 'visit-time','class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Doctor ID -->
        <div class="form-group row">
            {!! Form::label('visit-doctor_id', 'Doctor ID', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::select('doctor_id',Doctor::pluck('name', 'id'),null, ['class' => 'form-control','placeholder' => '- Select Doctor -',]) !!}
            </div>
        </div>

        <!-- Patient ID -->
        <div class="form-group row">
            {!! Form::label('visit-patient_id', 'Patient ID', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::select('patient_id',Patient::pluck('name', 'id'),null, ['class' => 'form-control','placeholder' => '- Select Patient -',]) !!}
            </div>
        </div>

        <!-- Description -->
        <div class="form-group row">
            {!! Form::label('visit-description', 'Description', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description', null, ['id' => 'visit-description','class' => 'form-control',]) !!}
            </div>
        </div>

        <!-- Statue -->
        <div class="form-group row">
            {!! Form::label('visit-statue', 'Status', ['class' => 'control-label col-sm-3',]) !!}
        
            <div class="col-sm-9">
                {!! Form::select('statue',Common::$statues,null, ['class' => 'form-control','placeholder' => '- Select Statue -',]) !!}
            </div>
        </div>  

        <!-- Submit Button -->
        <div class="form-group row">
            <div class="col-sm-offset-3 col-sm-6">
                {!! Form::button('Save', ['type' => 'submit','class' => 'btn btn-primary',]) !!}
            </div>
        </div>
            {!! Form::close() !!}
    </div>

@endsection