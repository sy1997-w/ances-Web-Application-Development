<?php
    use App\Common;
?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- New Doctor Form -->
        {!! Form::model($doctor, [ 'route' => ['doctor.store'], 'class' => 'form-horizontal' ]) !!}
        
        <!-- doctor_no -->
        <div class="form-group row">
            {!! Form::label('doctor-doctor_no', 'Name', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('doctor_no', null, ['id' => 'doctor-doctor_no','class' => 'form-control','maxlength' => 10,]) !!}
                </div>
        </div>

        <!-- Name -->
        <div class="form-group row">
                {!! Form::label('doctor-name', 'Name', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', null, ['id' => 'doctor-name','class' => 'form-control','maxlength' => 100,]) !!}
                </div>
        </div>

        <!-- nric -->
        <div class="form-group row">
            {!! Form::label('doctor-nric', 'Nric No.', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::text('nric', null, ['id' => 'doctor-nric','class' => 'form-control','maxlength' => 14,]) !!}
                <small id="nricformat" class="form-text text-muted">Format: XXXXXX-XX-XXXX </small>
            </div>
        </div>

        <!-- Gender -->
        <div class="form-group row">
            {!! Form::label('doctor-gender', 'Gender', ['class' => 'control-label col-sm-3',]) !!}
        
            <div class="col-sm-9">
            <!--{!! Form::select('gender', Common::$genders, null, ['class' => 'form-control','placeholder' => '- Select Gender -',]) !!}-->
                
                    @foreach(Common::$genders as $key => $val)
                    {!! Form::radio('gender', $key) !!} {{$val}}
                    @endforeach
            </div>
        </div> 

        <!-- Phone -->
        <div class="form-group row">
                    {!! Form::label('doctor-phone', 'Phone', ['class' => 'control-label col-sm-3',]) !!}
                    <div class="col-sm-9">
                        {!! Form::text('phone', null, ['id' => 'doctor-phone','class' => 'form-control','maxlength' => 20,]) !!}
                    </div>
        </div>

        <!-- Education -->
        <div class="form-group row">
            {!! Form::label('doctor-education', 'Education', ['class' => 'control-label col-sm-3',]) !!}
                <div class="col-sm-9">
                    {!! Form::text('education', null, ['id' => 'doctor-education','class' => 'form-control','maxlength' => 100,]) !!}
                </div>
        </div>

        <!-- Description -->
        <div class="form-group row">
            {!! Form::label('doctor-description', 'Description', ['class' => 'control-label col-sm-3',]) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description', null, ['id' => 'doctor-description','class' => 'form-control',]) !!}
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