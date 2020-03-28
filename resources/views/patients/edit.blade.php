<?php
    use App\Common;
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
        <!-- New Patient Form -->
        {!! Form::model($patient, ['route' => ['patient.update', $patient->id],'method' => 'put','class' => 'form-horizontal']) !!}
        
        <!-- patient_no -->
        <div class="form-group row">
            {!! Form::label('patient-patient_no', 'Name', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('patient_no', $patient->patient_no, ['id' => 'patient-patient_no','class' => 'form-control','maxlength' => 10,]) !!}
                <small class="form-text text-muted">Format: DID-XXXXX </small>
            </div>
        </div>

        <!-- Name -->
        <div class="form-group row">
            {!! Form::label('patient-name', 'Name', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', $patient->name, ['id' => 'patient-name','class' => 'form-control','maxlength' => 100,]) !!}
                </div>
        </div>

        <!-- NRIC -->
        <div class="form-group row">
            {!! Form::label('patient-nric', 'Nric', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('nric',  $patient->nric, ['id' => 'patient-nric','class' => 'form-control','maxlength' => 14,]) !!}
                    <small id="nricformat" class="form-text text-muted">Format: XXXXXX-XX-XXXX </small>
                </div>
        </div>

        <!-- Gender -->
        <div class="form-group row">
            {!! Form::label('patient-gender', 'Gender', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                @if ($patient->gender == '0')
                    {{ Form::radio('gender', '0', true, ['checked' => 'checked']) }} Male
                    {{ Form::radio('gender', '1', false, []) }} Female
                @else
                    {{ Form::radio('gender', '0', false, []) }} Male
                    {{ Form::radio('gender', '1', true, ['checked' => 'checked']) }} Female
                @endif
            </div>
        </div> 
     
        <!-- Phone -->
        <div class="form-group row">
            {!! Form::label('patient-phone', 'Phone', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('phone',  $patient->phone, ['id' => 'patient-phone','class' => 'form-control','maxlength' => 20,]) !!}
                    <small class="form-text text-muted">Format: XXX-XXXXXXX </small> 
                </div>
        </div>

        <!-- Address -->
        <div class="form-group row">
            {!! Form::label('patient-address', 'Address', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('address',  $patient->address, ['id' => 'patient-address','class' => 'form-control',]) !!}
                </div>
        </div>
    
        <!-- Postcode -->
        <div class="form-group row">
            {!! Form::label('patient-postcode', 'Postcode', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('postcode',  $patient->postcode, ['id' => 'patient-postcode','class' => 'form-control','maxlength' => 5,]) !!}
            </div>
        </div>
        
        <!-- City -->
        <div class="form-group row">
            {!! Form::label('patient-city', 'City', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('city',  $patient->city, ['id' => 'patient-city','class' => 'form-control','maxlength' => 50,]) !!}
            </div>
        </div>
        
        <!-- State -->
        <div class="form-group row">
            {!! Form::label('patient-state', 'State', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::select('state', Common::$states, $patient->state, ['class' => 'form-control','placeholder' => '- Select State -',]) !!}
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group row">
        <div class="col-sm-offset-3 col-sm-6">
        {!! Form::button('Update', [
        'type' => 'submit',
        'class' => 'btn btn-primary',
        ]) !!}
        </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection