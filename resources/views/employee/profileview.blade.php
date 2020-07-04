@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-3">
        <div class="card">
            <div class="card-header"><h5>Personal Info</h5></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">First name:</div>
                    <div class="col-7">{{ $user->firstname }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Last name:</div>
                    <div class="col-7">{{ $user->lastname }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Email:</div>
                    <div class="col-7">{{ $user->email }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Date of birth:</div>
                    <div class="col-7">{{ $user->personal->dob }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Gender:</div>
                    <div class="col-7">{{ $user->personal->gender }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Address:</div>
                    <div class="col-7">{{ $user->personal->street }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Nationality</div>
                    <div class="col-7">{{ $user->personal->nation }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Residence:</div>
                    <div class="col-7">{{ $user->personal->residence }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Phone number:</div>
                    <div class="col-7">{{ $user->personal->phone }}</div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-5">Motivation letter:</div>
                    <div class="col-7">{{ $user->personal->description }}</div>
                </div>
                <hr>
            </div>
        </div>
        </div>

        <!-- Second column  -->

        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header"><h5>Work experience</h5></div>

                <div class="card-body">
                    @foreach($works as $work)
                    <div class="row">
                        <div class="col-5">Company:</div>
                        <div class="col-7">{{ $work->company }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-5">Position:</div>
                        <div class="col-7">{{ $work->position }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-5">Period:</div>
                        <div class="col-7">{{ $work->period }} year(s)</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-5">Industry:</div>
                        <div class="col-7">{{ $work->industry }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-5">Website:</div>
                        <div class="col-7">{{ $work->website }}</div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Skills: out of 10</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">Desingning Photo & Video editing:</div>
                        <div class="col-7">{{ $user->skills->designing }}</div>
                    </div>
                    <hr>
                    <h5>Programming:</h5>
                    <div class="row">
                        <div class="col-5">
                            Web development:
                        </div>
                        <div class="col-7">
                            {{ $user->skills->web }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
