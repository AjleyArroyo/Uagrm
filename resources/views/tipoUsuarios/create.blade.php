@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'tipoUsuarios.store']) !!}

        @include('tipoUsuarios.fields')

    {!! Form::close() !!}
</div>
@endsection
