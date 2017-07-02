@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">

            今月の収支<br>
            <br>収入<?php print $sum; ?>▲支出<?php print $esum; ?>=収支<?php print $sum-$esum; ?>
            <br>
            {!! link_to_route('deals.look', '2017年5月', ['year' => 2017, 'month'=>5], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('deals.look', '2017年6月', ['year' => 2017, 'month'=>6], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('deals.look', '2017年7月', ['year' => 2017, 'month'=>7], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('deals.index', 'その他の月', null, ['class' => 'btn btn-lg btn-primary']) !!}  
<br>
<br>
            {!! link_to_route('deals.report', '月別確認', null, ['class' => 'btn btn-lg btn-primary']) !!}
<br>
<br>
            {!! link_to_route('deals.create', '新規取引登録', null, ['class' => 'btn btn-lg btn-primary']) !!}

                
            </aside>

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