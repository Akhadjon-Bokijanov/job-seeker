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


            <!-- START VACANCY OPERATIONS -->
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Vacancy operations</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"><a href="/employer/addvacancy" class="text-dark"><i class="fas fa-plus-circle"></i> Add vacancy</a></div>
                        <div class="col-md-3"><a class="text-dark" href="/employer/viewvacancies"><i class="fas fa-list-ul"></i> Your vacancies list</a></div>
                    </div>
                </div>
            </div>
            <!-- END VACANCY OPERATIONS -->

            <!-- START APPLICANT OPERATIONS -->
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Applicant operations</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"><a href="" class="text-dark"><i class="fas fa-list-ul"></i> View all</a></div>
                        <div class="col-md-3"><a class="text-dark" href=""><i class="fas fa-user-cog"></i> Set filters</a></div>
                    </div>
                </div>
            </div>
            <!-- END APPLICANT OPERATIONS -->

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
