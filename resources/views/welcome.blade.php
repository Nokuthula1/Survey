@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Survey') }}</center></div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                 <center><button type="button" class="btn btn-info" style="width:160px"><a href="{{ asset('survey') }}" style="color:white" >Fill Out Survey</a></button></center><br>
                 <center><button type="button" class="btn btn-success"><a href="{{ asset('view-results') }}" style="color:white">View Survey Results</a></button></center><br> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection