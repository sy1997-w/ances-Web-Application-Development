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
        <!-- New Doctor Form -->
        {!! Form::model($doctor, ['route' => ['doctor.update', $doctor->id],'method' => 'put','class' => 'form-horizontal']) !!}

        <!-- doctor_no -->
        <div class="form-group row">
            {!! Form::label('doctor-doctor_no', 'Doctor ID', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('doctor_no', $doctor->doctor_no, ['id' => 'doctor-doctor_no','class' => 'form-control','maxlength' => 10,]) !!}
                <small class="form-text text-muted">Format: DID-XXXXX </small>
            </div>
        </div>

        <!-- Name -->
        <div class="form-group row">
            {!! Form::label('doctor-name', 'Name', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', $doctor->name, ['id' => 'doctor-name','class' => 'form-control','maxlength' => 100,]) !!}
                </div>
        </div>

        <!-- nric -->
        <div class="form-group row">
            {!! Form::label('doctor-nric', 'Nric No.', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('nric', $doctor->nric, ['id' => 'doctor-nric','class' => 'form-control','maxlength' => 14,]) !!}
                <small id="nricformat" class="form-text text-muted">Format: XXXXXX-XX-XXXX </small>
            </div>
        </div>

        <!-- Gender -->
        <div class="form-group row">
            {!! Form::label('doctor-gender', 'Gender', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                @if ($doctor->gender == '0')
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
            {!! Form::label('doctor-phone', 'Phone', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('phone', $doctor->phone, ['id' => 'doctor-phone','class' => 'form-control','maxlength' => 20,]) !!}
                <small class="form-text text-muted">Format: XXX-XXXXXXX </small> 
            </div>
        </div>
        
        <!-- Education -->
        <div class="form-group row">
            {!! Form::label('doctor-education', 'Education', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('education', $doctor->education, ['id' => 'doctor-education','class' => 'form-control','maxlength' => 5,]) !!}
                </div>
        </div>


        <!-- Description -->
        <div class="form-group row">
            {!! Form::label('doctor-description', 'Description', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('description', $doctor->description, ['id' => 'doctor-description','class' => 'form-control',]) !!}
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