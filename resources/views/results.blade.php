@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Survey Results') }}</center></div>
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Total number of surveys:</td>
                            <td>{{ $surveys }}</td>
                          </tr>
                          <tr>
                            <td>Average age:</td>
                            <td>{{ $age }}</td>
                          </tr>
                          <tr>
                            <td>Oldest person who participated in survey: </td>
                            <td>{{ $oldest }}</td>
                          </tr>
                          <tr>
                            <td>Youngest person who participated in survey: </td>
                            <td>{{ $youngest }}</td>
                          </tr>
                          <tr>
                            <td> </td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td>Percentage of people who like pizza: </td>
                            <td>{{ $pizza }}%</td>
                          </tr>
                          <tr>
                            <td>Percentage of people who like pasta: </td>
                            <td>{{ $pasta }}%</td>
                          </tr>
                          <tr>
                            <td>Percentage of people who like pap and wors: </td>
                            <td>{{ $pap }}%</td>
                          </tr>
                          <tr>
                            <td> </td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td>Average of people like to eat out:</td>
                            <td>{{ $eat }}</td>
                          </tr>
                          <tr>
                            <td>Average of people like to watch movies:</td>
                            <td>{{ $movies }}</td>
                          </tr>
                          <tr>
                            <td>Average of people like to watch tv: </td>
                            <td>{{ $tv }}</td>
                          </tr>
                          <tr>
                            <td>Average of people like to listen to radio:</td>
                            <td>{{ $radio }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <center><button type="button" class="btn btn-success"><a href="{{ asset('home') }}" style="color: white">OK</a></button></center>
            </div>

           
        </div>
    </div>
</div>
@endsection