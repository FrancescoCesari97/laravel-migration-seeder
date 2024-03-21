@extends('layouts.app')


@section('title', 'Trains')


@section('main-content')




    <section>
        <div class="container py-4">
            <h1> Lista treni</h1>

            @forelse ($trains as $train)
                <ul>
                    <li>{{ $train['company'] }} </li>
                    <li> {{ $train['departure_station'] }}</li>
                    <li> {{ $train['arrive_station'] }}</li>
                    <li> {{ $train['departure_time'] }} </li>
                    <li> {{ $train['arrive_time'] }} </li>
                    <li> {{ $train['train_code'] }}</li>
                    <li> {{ $train['on_time'] ? 'Yes' : 'No' }} </li>
                    <li> {{ $train['type'] }} </li>

                </ul>
                <hr>
            @empty
            @endforelse

            {{ $trains->links() }}
        </div>
    </section>


@endsection
