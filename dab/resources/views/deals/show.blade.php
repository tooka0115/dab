@extends('layouts.app')

@section('content')

    <h1>取引詳細ページ</h1>
    
        @if (count($deal) > 0)

    
    
    <p>{{ $deal->year}}年{{ $deal->month}}月{{ $deal->day}}日 {{ $deal->attribute}}　{{ $deal->category_id}}　{{ $deal->item_id}}　{{ $deal->amount }}円</p>
    
    {!! link_to_route('deals.edit', 'この取引編集', ['id' => $deal->id]) !!}
    
    {!! Form::model($deal, ['route' => ['deals.destroy', $deal->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}

    @endif

@endsection