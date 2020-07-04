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

            <div class="card mt-3">
                <div class="card-header"><h5>Add your vacancy</h5></div>
                <div class="card-body">
                    <form action="/employer/newvacancy" class="form-group" method="post">
                        @csrf

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="position" class="col-md-4 col-form-label">Position</label>

                            <div class="col-md-8">
                                <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}"  autocomplete="position" autofocus>

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
                            <label for="salary" class="col-md-4 col-form-label">Minimun salary  (in Uzb sum)</label>

                            <div class="col-md-8">
                                <input id="minsalary" type="number" class="form-control @error('minsalary') is-invalid @enderror" name="minsalary" value="{{ old('minsalary') }}"  autocomplete="minsalary" autofocus>

                                @error('minsalary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="maxsalary" class="col-md-4 col-form-label">Max salary (in Uzb sum)</label>

                            <div class="col-md-8">
                                <input id="maxsalary" type="number" class="form-control @error('maxsalary') is-invalid @enderror" name="maxsalary" value="{{ old('maxsalary') }}"  autocomplete="maxsalary" autofocus>

                                @error('maxsalary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="time" class="col-md-4 col-form-label">Type of job</label>

                            <div class="col-md-8">
                                <select id="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}"  autocomplete="time" autofocus>
                                    <option value="Temorary">Temporary</option>
                                    <option value="Permanent">Permanent</option>
                                </select>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="type" class="col-md-4 col-form-label">Type of job</label>

                            <div class="col-md-8">
                                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"  autocomplete="type" autofocus>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Full-time">Full-time</option>
                                </select>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="number" class="col-md-4 col-form-label">How many vacancies are available for this position?</label>

                            <div class="col-md-8">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}"  autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="location" class="col-md-4 col-form-label">Location</label>

                            <div class="col-md-8">
                                <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="description" class="col-md-4 col-form-label">Job description</label>

                            <div class="col-md-8">
                                <textarea id="description" rows="8" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="requirement" class="col-md-4 col-form-label">Job requirements</label>

                            <div class="col-md-8">
                                <textarea id="requirement" rows="8" type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" value="{{ old('requirement') }}"  autocomplete="requirement" autofocus></textarea>

                                @error('requirement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->
                        
                        <button class="btn btn-primary float-right" name="submit">Add</button>
                    </form>
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
