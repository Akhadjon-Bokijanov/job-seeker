@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ Auth::user()->firstname }} {{ Auth::user()->lastname }},</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Thank you for being with us. We will help you to find your loyal employee!!!
                </div>
            </div>
            <!-- END || WELCOME CARD -->
                    
                <!-- START || TEMPLATE FOR CARD || FOR LIST OF JOBS -->
            @foreach($vacancies as $vacancy)
                <div class="card mt-3" style="border-left: 3px solid orange">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <a href=""><img class="rounded-circle" style="max-width: 40px" src="/storage/uploads/default.png" alt="No image"></a>
                            </div>
                            <div class="col-8">
                                <h5>{{ $vacancy->position }}</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3"><h5>Salary (in UZs):</h5></div>
                            <div class="col-3">From: {{ $vacancy->minsalary }}</div>
                            <div class="col-3">To: {{ $vacancy->maxsalary }}</div>
                            <form action="/employer/vacancies/{{ $vacancy->id }}" class="form-group col-3" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>

                        <div class="row mt-2" style="font-size: 1.1em">
                            <div class="col-3"><i class="fas fa-map-marker-alt"></i><small> {{ $vacancy->location }}</small></div>
                            <div class="col-3" title="Posted at"><i class="far fa-clock"></i><small> {{ $vacancy->updated_at }}</small></div>
                            <div class="col-3"><i class="fas fa-list-ul"></i><small> {{ $vacancy->type }}</small></div>
                            <div class="col-3"><i class="far fa-address-card"></i><small> {{ $vacancy->time }}</small></div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- END || TEMPLATE FOR CARD || FOR LIST OF JOBS -->

        </div>

        <!-- START || NOTIFICATION CARD -->
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header">Recommended for you</div>
                <div class="card-body">
                    <ul>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi ratione assumenda nihil necessitatibus debitis adipisci. Repellendus quisquam harum corrupti?
                            </p>
                        </li>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, similique!
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END || NOTIFICATION CARD -->


    </div>
</div>
@endsection
