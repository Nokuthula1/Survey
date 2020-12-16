@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header">{{ __('Take Our Survey') }}</div></center>

                <div class="card-body">
                    <form method="POST" action="{{ route('survey.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Names') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" min="10" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="created_at" type="date" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ old('created_at') }}" required autocomplete="created_at" autofocus>

                                @error('created_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" min="5" max="102" style="width: 75px" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="food" class="col-md-4 col-form-label text-md-right">{{ __('What Is Your Favourite Food?(You Can Choose More Than 1 Answer)') }}</label>

                            <div class="col-md-6">
                                <input id="food" name="food" type="checkbox" class="form-check-input" value="Pizza">Pizza<br>
                                <input id="food" name="food" type="checkbox" class="form-check-input" value="Pasta">Pasta<br>
                                <input id="food" name="food" type="checkbox" class="form-check-input" value="Pap and Wors">Pap and Wors<br>
                                <input id="food" type="checkbox" class="form-check-input" value="Beef Stir Fry">Beef Stir Fry<br>
                                <input id="food" type="checkbox" class="form-check-input" value="Chicken Stir Fry">Chicken Stir Fry<br>
                                <input id="food" type="checkbox" class="form-check-input" value="Other">Other
                                @error('food')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Strongly Agree<br>(1)</th>
                                    <th>Agree<br>(2)</th>
                                    <th>Nuetral<br>(3)</th>
                                    <th>Disagree<br>(4)</th>
                                    <th>Strongly Disagree<br>(5)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>I like to eat out</td>
                                    <td><center><input type="radio" class="form-check-input" name="eat" value="1"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="eat" value="2"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="eat" value="3"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="eat" value="4"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="eat" value="5"></center></td>
                                </tr>
                                <tr>
                                    <td>I like to watch movies</td>
                                    <td><center><input type="radio" class="form-check-input" name="movies" value="1"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="movies" value="2"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="movies" value="3"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="movies" value="4"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="movies" value="5"></center></td>
                                </tr>
                                <tr>
                                    <td>I like to watch tv</td>
                                    <td><center><input type="radio" class="form-check-input" name="tv" value="1"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="tv" value="2"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="tv" value="3"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="tv" value="4"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="tv" value="5"></center></td>
                                </tr>
                                <tr>
                                    <td>I like to listen to radio</td>
                                    <td><center><input type="radio" class="form-check-input" name="radio" value="1"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="radio" value="2"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="radio" value="3"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="radio" value="4"></center></td>
                                    <td><center><input type="radio" class="form-check-input" name="radio" value="5"></center></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>



                        
                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
