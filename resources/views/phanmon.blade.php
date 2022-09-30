@extends('master-layout')
@section('content')

        <div class="main-content">
            <h2 class="title-pm">{{$phanmon->tenphanmon}}</h2>
            @php
              $i=1;  
            @endphp
            @foreach ($phanmon->baihoc as $bh )
            {{$i++}}
            <a href="{{url('/')}}/{{changeTitle($bh->tenbaihoc)}}.{{$bh->id}}"> {{$bh->tenbaihoc}}</a>
            <br>
            @endforeach

            
        </div>
        <div class="relate">
            <h3>Tin liên quan</h3>
            <p>demo demo demo</p>
            <p>demo demo demo</p>
            <p>demo demo demo</p>
            <p>demo demo demo</p>
        </div>
</div>
@endsection
