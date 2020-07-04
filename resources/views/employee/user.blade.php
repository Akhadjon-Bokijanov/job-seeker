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

                    Thank you for being with us. We will help you to find your dream job!!!
                </div>
            </div>
            <!-- START || WELCOME CARD -->

            <div class="card mt-3">
                <div class="card-header"><h5>List of Jobs:</h5></div>
            </div>


            <!-- START || TEMPLATE FOR CARD || FOR LIST OF JOBS -->
            <div class="card mt-3" style="border-left: 3px solid orange">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <a href=""><img class="rounded-circle" style="max-width: 40px" src="/storage/uploads/default.png" alt="No image"></a>
                        </div>
                        <div class="col-8">
                            <h5>We need fullstack web developer</h5>
                        </div>
                        <div class="col-3 text-primary" style="font-size: 25px;"><i class="far fa-heart"></i></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3"><h5>Salary:</h5></div>
                        <div class="col-3">From: $1000</div>
                        <div class="col-3">To: $3000</div>
                        <div class="col-3"><a href="" class="btn-primary btn">Apply</a></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-3"><i class="fas fa-map-marker-alt"></i><small> Tashkent</small></div>
                        <div class="col-3" title="Posted at"><i class="far fa-clock"></i><small> 27 January</small></div>
                        <div class="col-3"><i class="fas fa-list-ul"></i><small> Permanent Job</small></div>
                        <div class="col-3"><i class="far fa-address-card"></i><small> Full-time</small></div>
                    </div>
                </div>
            </div>
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
