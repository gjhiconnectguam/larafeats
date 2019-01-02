@extends('layouts.app')

@section('content')
<div class="container">

    <form method="post" action="{{ route('fetch.client.ips') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit">
            Find my IP Addresses
        </button>
    </form>

    <div class="panel">
        <div class="panel-body">
            @if(session()->has('request'))
                Request: {{ session('request') }} <br />
                Result: {{ session('ip_addresses') }} <br />
            @endif
        </div>
    </div>
</div>
@endsection