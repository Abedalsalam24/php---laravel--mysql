@extends('layouts.admin') 







@section('content')
<h1>Craete Users</h1>



{!! Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store' , 'files'=>true])               !!}

<div class="form-group">
    {!! Form::label('name' , 'Name') !!}
    {!! Form::text('name' , null , ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('email' , 'Email') !!}
    {!! Form::email('email' , null , ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('role_id' , 'Role') !!}
{!! Form::select('role_id' , ['' =>'Choose Option'] + $roles, null , ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('is_active' , 'Status') !!}
    {!! Form::select('is_active' , array(1 =>'Active', 0 =>'Not Active'),1, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('file' , '') !!}

    {!! Form::file('Create Post'  , ['class'=>'btn btn-primary']) !!}

</div>



<div class="form-group">
    {!! Form::label('password' , 'Password') !!}
    {!! Form::password('password'  , ['class'=>'form-control']) !!}

</div>


<div class="form-group">
    {!! Form::submit('Create User'  , ['class'=>'btn btn-primary']) !!}

</div>


    {!! Form::close() !!}


    @include('includes.form_errors')








@stop