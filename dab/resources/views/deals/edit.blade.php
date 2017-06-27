@extends('layouts.app')

@section('content')

    <h1>id: {{ $deal->id }} の取引編集ページ</h1>

    {!! Form::model($deal, ['route' => ['deals.update', $deal->id], 'method' => 'put']) !!}

        {!! Form::label('amount', '金額:') !!}
        {!! Form::text('amount') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection