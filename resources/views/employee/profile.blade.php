@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $user->firstname }} {{ $user->lastname }},</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Thank you for being with us. We will help you to find your dream job!!!
                    <br>
                    Please, now provide as much info on yourself as possible. Then we can help you to find appropirate job for you. Moreover this can help you while applying for jobs as you do not have to fill in the each form again and again. <strong>We highly encourage you to fill in the forms with your best knowledge.</strong>
                </div>
            </div>
            <!-- END || WELCOME CARD  -->


            <!-- START FORMS SECTION TO BE FILLED -->
            
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Forms to be filled: </h5>
                </div>
                <div class="card-body">
                    <div>
                        <a class="text-dark" href="/employee/{{ $user->id }}/editpersonalinfo">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="far fa-user"></i> Personal Info</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                    <div>
                        <a href="/employee/{{ $user->id }}/createexperience" class="text-dark">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="fas fa-briefcase"></i> Working Experience</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                    <div>
                        <a href="/employee/{{ $user->id }}/editskills" class="text-dark">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="fas fa-chart-line"></i> Skills</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                    <div>
                        <a href="/employee/{{ $user->id }}/createeducation" class="text-dark">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="fas fa-user-graduate"></i> Education & Trainings</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                    <div>
                        <a href="/employee/{{ $user->id }}/createawards" class="text-dark">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="fas fa-award"></i> Awards</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                    <div>
                        <a href="/employee/{{ $user->id }}/editpreferences" class="text-dark">
                            <div class="row justify-content-between">
                                <div class="col-6"><i class="fas fa-user-cog"></i> Preferences</div>
                                <div class="col-1"><i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <hr>

                </div>
            </div>

            <!-- END FORMS SECTION TO BE FILLED -->
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
