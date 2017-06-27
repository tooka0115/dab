@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-xs-4">
                {!! Form::open(['route' => 'deals.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('amount', old('amount'), ['class' => 'form-control', 'rows' => '1']) !!}
                    </div>
                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
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