@extends('layouts.app')

@section('content')

    <h1>取引新規作成ページ</h1>

    {!! Form::model($deal, ['route' => 'deals.store']) !!}

        {!! Form::label('amount', '金額:') !!}
        {!! Form::text('amount') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection