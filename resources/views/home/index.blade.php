@extends('layouts.app')
@section('title' , 'home page')

@section('content')
<div>
        @for($i = 0; $i < 10 ; $i++)
            <div>the current value is{{ $i }} </div>
        @endfor
     </div>
    <div>
        @php $done = false @endphp

        @while(!$done)
        <h1>i am not done</h1>
        @php if (random_int(0, 1)===1) $done = true @endphp
        @endwhile
    </div>
@endsection