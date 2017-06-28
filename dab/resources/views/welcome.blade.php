@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-xs-4">
                
          {!! Form::open(['route' => 'deals.store']) !!}
                <div class="form-group">
                    {!! Form::label('amount', '金額') !!}
                    {!! Form::text('amount', old('amount'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('attribute', '収支') !!}
                    {!! Form::select('attribute',['収入'=>'収入', '支出'=>'支出'], null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('category_id', '大区分') !!}
                    {!! Form::text('category_id', old('category_id'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('item_id', '小区分') !!}
                    {!! Form::text('item_id', old('item_id'), ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <?php
            print $sum;
            print $esum;
            print $sum-$esum;
            ?>


                
            </aside>
            <div class="col-xs-8">
                @if (count($deals) > 0)
                    @include('deals.deals', ['deals' => $deals])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the dAb</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection