@extends('layouts.app')


@section('content')

    <h1>{{__('message.welcome', ['name'=>'مروارید'])}}</h1>
    <h1>{{trans_choice('message.cars', 0, ['value'=> 100])}}</h1>

@endsection