@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $work->user->firstname }} {{ $work->user->lastname }}, you can edit your work experience information</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- START FORM SECTION FOR INPUTS -->
                
                    <form action="/employee/{{ $work->id }}/updateexperience" class="form-group" method="post"> 
                        @csrf
                        @method('PATCH')
                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="company" class="col-md-4 col-form-label">Company</label>

                            <div class="col-md-8">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') ?? $work->company }}"  autocomplete="company" autofocus>

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="position" class="col-md-4 col-form-label">Position</label>

                            <div class="col-md-8">
                                <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') ?? $work->position }}"  autocomplete="position" autofocus>

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="industry" class="col-md-4 col-form-label">Company industry</label>

                            <div class="col-md-8">
                                <input id="industry" type="text" class="form-control @error('industry') is-invalid @enderror" name="industry" value="{{ old('industry') ?? $work->industry }}"  autocomplete="industry" autofocus>

                                @error('industry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="period" class="col-md-4 col-form-label">Working period (in years)</label>

                            <div class="col-md-8">
                                <input id="period" type="number" class="form-control @error('period') is-invalid @enderror" name="period" value="{{ old('period') ?? $work->period }}"  autocomplete="period" autofocus>

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
                            <label for="website" class="col-md-4 col-form-label">Company website url (optional)</label>

                            <div class="col-md-8">
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') ?? $work->website }}"  autocomplete="website" autofocus>

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        
                        <button name="submit" class="btn btn-primary float-right">Save</button>
                    </form>
                <!-- END FORM SECTION FOR INPUTS -->
                    

                </div>
            </div>
            <!-- END || WELCOME CARD  -->
            
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
