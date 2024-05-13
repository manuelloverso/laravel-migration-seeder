@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{ ucfirst($train->company) }}</h4>
                    <span class="d-block mb-2"><strong>Code: </strong>{{ $train->train_code }}</span>
                    <p><strong>Departure Date: </strong>{{ $train->departure_date }}</p>
                    <p><strong>Departure Station: </strong>{{ $train->departure_station }}</p>
                    <p><strong>Arrival Station: </strong>{{ $train->arrival_station }}</p>
                    <p><strong>Departure Time: </strong>{{ $train->departure_time }}</p>
                    <p><strong>Arrival Time: </strong>{{ $train->arrival_time }}</p>
                    @if ($train->departure_date >= date('Y-m-d'))
                        <button class="btn btn-primary">Book</button>
                    @else
                        <h4 class="text-danger">Can't book this train, it has already left</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
