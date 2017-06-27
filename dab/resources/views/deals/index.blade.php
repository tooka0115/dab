@extends('layouts.app')

@section('content')

    <h1>一覧</h1>

    @if (count($deals) > 0)
        <ul>
            @foreach ($deals as $deal)
                <li>{!! link_to_route('deals.show', $deal->id, ['id' => $deal->id]) !!} : {{ $deal->amount }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('deals.create', '新規取引の登録') !!}

@endsection