@extends('layouts.app')

@section('content')

    <h1>id = {{ $deal->id }} の取引詳細ページ</h1>
    
    <p>{{ $deal->amount }}</p>
    
    {!! link_to_route('deals.edit', 'この取引編集', ['id' => $deal->id]) !!}
    
    {!! Form::model($deal, ['route' => ['deals.destroy', $deal->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection