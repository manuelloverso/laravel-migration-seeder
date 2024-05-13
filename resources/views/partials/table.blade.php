@extends('layouts.app')

@section('content')
    <div class="container">
        @yield('table-heading')
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">See more</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $key => $train)
                    <tr>
                        <th scope="row">{{ $train->id }}</th>
                        <td>{{ ucfirst($train->company) }}</td>
                        <td>{{ ucfirst($train->departure_date) }}</td>
                        <td>{{ ucfirst($train->departure_station) }}</td>
                        <td>{{ ucfirst($train->arrival_station) }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td><a class="btn btn-info" href="{{ route('train', ['id' => $key]) }}">See more</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
