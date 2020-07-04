@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $user->firstname }} {{ $user->lastname }}, please provide personal information</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- START FORM SECTION FOR INPUTS -->
                
                    <form action="/employee/{{ $user->id }}/profile" class="form-group" method="post"> 
                        @csrf
                        @method('PATCH')

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="dob" class="col-md-4 col-form-label">Date of birth</label>

                            <div class="col-md-8">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') ?? $user->personal->dob }}"  autocomplete="dob" autofocus>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="gender" class="col-md-4 col-form-label">Gender</label>

                            <div class="col-md-8">
                                <select name="gender" class="form-control" id="">
                                    
                                    <option value="{{ $user->personal->gender }}">{{ $user->personal->gender}}</option>
                                    <option value="Secret">I want to keep unknown</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="street" class="col-md-4 col-form-label">Adress</label>

                            <div class="col-md-8">
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') ?? $user->personal->street }}"  autocomplete="street" autofocus>

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="nation" class="col-md-4 col-form-label">Nationality</label>

                            <div class="col-md-8">
                                <input id="nation" type="text" class="form-control @error('nation') is-invalid @enderror" name="nation" value="{{ old('nation') ?? $user->personal->nation }}"  autocomplete="nation" autofocus>

                                @error('nation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="residence" class="col-md-4 col-form-label">Recidence of country</label>

                            <div class="col-md-8">
                                <input id="residence" type="text" class="form-control @error('residence') is-invalid @enderror" name="residence" value="{{ old('residence') ?? $user->personal->residence }}"  autocomplete="residence" autofocus>

                                @error('residence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="phone" class="col-md-4 col-form-label">Phone number</label>

                            <div class="col-md-8">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->personal->phone }}"  autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="description" class="col-md-4 col-form-label">Your motivational letter</label>

                            <div class="col-md-8">
                                <textarea id="description" rows="10" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus>{{ $user->personal->description }}</textarea>

                                @error('description')
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
