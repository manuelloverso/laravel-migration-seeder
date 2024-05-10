@extends('layouts.app')

@section('content')
    <div class="container">
        <ol>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Arrival Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->id }}</th>
                            <td>{{ ucfirst($train->company) }}</td>
                            <td>{{ ucfirst($train->departure_station) }}</td>
                            <td>{{ ucfirst($train->arrival_station) }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </ol>
    </div>
@endsection
