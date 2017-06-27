<ul class="media-list">
@foreach ($deals as $deal)
    <?php $user = $deal->user; ?>
    <li class="media">
        <div class="media-left">
        </div>
        <div class="media-body">

            <div>
                <p>{!! nl2br(e($deal->amount)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $deal->user_id)
                    {!! Form::open(['route' => ['deals.destroy', $deal->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
        </div>
    </li>
@endforeach
</ul>
{!! $deals->render() !!}