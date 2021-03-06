@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit List<a class="float-right btn btn-info btn-sm" href="/laravelweb/public/dashboard">Go Back</a></div>
            <div class="card-body">
               {!!Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST'])!!} 
                    {{Form::bsText('name',$listing->name,['placeholder' => 'Company Name'])}}
                    {{Form::bsText('email',$listing->email,['placeholder' => 'Contact Email'])}}
                    {{Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone'])}}
                    {{Form::bsText('address',$listing->address,['placeholder' => 'Bussiness Address'])}}
                    {{Form::bsText('website',$listing->website,['placeholder' => 'Company Website'])}}
                    {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About this business'])}}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::bsSubmit('Update', ['class' => 'btn btn-success'])}}
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection