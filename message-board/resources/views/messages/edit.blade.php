@extends('layouts.app')

@section('content')
    <h1>id:{{$message->id}}のメッセージ編集ページ</h1>
    @include('commons.error_messages')

    
    {!!form::model($message,['route'=>['messages.update', $message->id],'method'=>'put'])!!}
        {!!form::label('title','タイトル:')!!}
        {!!form::text(('title')!!}
    
        {!!form::label('content','メッセージ:')!!}
        {!!form::text('content')!!}
        
        {!!form::submit('更新')!!}
    {!!form::close()!!}}


@endsection