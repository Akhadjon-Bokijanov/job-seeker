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
                
                    <form action="/employee/education/store" class="form-group" method="post"> 
                        @csrf

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="profession" class="col-md-4 col-form-label">Profession</label>

                            <div class="col-md-8">
                                <input id="profession" type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}"  autocomplete="profession" autofocus>

                                @error('profession')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="institution" class="col-md-4 col-form-label">Institution</label>

                            <div class="col-md-8">
                                <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') }}"  autocomplete="institution" autofocus>

                                @error('institution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="period" class="col-md-4 col-form-label">Period (in years)</label>

                            <div class="col-md-8">
                                <input id="period" type="number" class="form-control @error('period') is-invalid @enderror" name="period" value="{{ old('period') }}"  autocomplete="period" autofocus>

                                @error('period')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="isfinished" class="col-md-4 col-form-label">Have you finished?</label>

                            <div class="col-md-8">
                                <select name="isfinished" id="" class="form-control">
                                    <option value="1">Yes, I have finished.</option>
                                    <option value="0">No, I have not fished yet.</option>
                                </select>

                                @error('isfinished')
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
                    @foreach($educations as $education)
                        <div class="row align-items-center">
                            <div class="col-md-3 col-xs-4"><h6>{{ $education->profession }}</h6></div>
                            <div class="col-md-3 col-xs-4">{{ $education->institution }}</div>
                            <div class="col-md-2 col-xs-4">{{ $education->period }} year(s)</div>
                            <div class="col-md-3 d-flex justify-content-between">
                                <a href="/employee/{{ $education->id }}/editeducation" class="ml-2 btn btn-primary">Edit</a>
                                <form action="/deleteeducation/{{ $education->id }}" method="post">
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
