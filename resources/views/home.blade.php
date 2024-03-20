@extends('layouts.app')


@section('title', 'Pagina iniziale')


@section('main-content')




    <section>
        <div class="container py-4">
            <h1> Lista treni</h1>

            @forelse ($trains as $train)
                <ul>
                    <li>{{ $train['company'] }} </li>
                    <li> {{ $train['departure station'] }}</li>
                    <li> {{ $train['arrive station'] }}</li>
                    <li> {{ $train['departure time'] }} </li>
                    <li> {{ $train['arrive time'] }} </li>
                    <li> {{ $train['train code'] }}</li>
                    <li> {{ $train['on time'] ? 'Yes' : 'No' }} </li>
                    <li> {{ $train['type'] }} </li>

                </ul>
                <hr>
            @empty
            @endforelse
        </div>
    </section>


@endsection
