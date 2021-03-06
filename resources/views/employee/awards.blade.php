@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $user->firstname }} {{ $user->lastname }}, please provide your education and training background</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- START FORM SECTION FOR INPUTS -->
                
                    <form action="/employee/awards/store" class="form-group" method="post"> 
                        @csrf

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="nomination" class="col-md-4 col-form-label">Nomination / Award</label>

                            <div class="col-md-8">
                                <input id="nomination" type="text" class="form-control @error('nomination') is-invalid @enderror" name="nomination" value="{{ old('nomination') }}"  autocomplete="nomination" autofocus>

                                @error('nomination')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="date" class="col-md-4 col-form-label">Year of receipt</label>

                            <div class="col-md-8">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}"  autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="provider" class="col-md-4 col-form-label">By whom the nomination provided</label>

                            <div class="col-md-8">
                                <input id="provider" type="text" class="form-control @error('provider') is-invalid @enderror" name="provider" value="{{ old('provider') }}"  autocomplete="provider" autofocus>

                                @error('provider')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="summary" class="col-md-4 col-form-label">Brief summary on how you achieved it</label>

                            <div class="col-md-8">
                                <textarea name="summary" class="form-control" id="" cols="30" rows="7" required></textarea>

                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->
                                                
                        <button name="submit" class="btn btn-primary float-right">Add</button>
                    </form>
                <!-- END FORM SECTION FOR INPUTS -->
                    
                </div>
            </div>
            <!-- END || WELCOME CARD  -->

            <div class="card mt-3">
                <div class="card-header"><h5>Your educational & trainging information</h5></div>

                <div class="card-body">
                    @foreach($awards as $award)
                        <div class="row align-items-center">
                            <div class="col-md-3 col-xs-4"><h6>{{ $award->nomination }}</h6></div>
                            <div class="col-md-3 col-xs-4">{{ $award->provider }}</div>
                            <div class="col-md-2 col-xs-4">{{ $award->date }}</div>
                            <div class="col-md-3 d-flex justify-content-between">
                                <a href="/employee/{{ $award->id }}/editaward" class="ml-2 btn btn-primary">Edit</a>
                                <form action="/deleteaward/{{ $award->id }}" method="post">
                                    @csrf
                                    <button name="delete" class="ml-2 btn btn-danger">Delete</button>
                                </form>
                            </div>                            
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            
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
