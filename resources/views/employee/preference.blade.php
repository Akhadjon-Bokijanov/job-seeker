@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $user->firstname }} {{ $user->lastname }}, please choose in which spheres you want to work</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- START FORM SECTION FOR INPUTS -->
                
                    <form action="/employee/{{ $user->id }}/editpreference" class="form-group" method="post"> 
                        @csrf
                        @method('PATCH')

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="education" class="col-md-4 col-form-label"><h5>Education</h5></label>

                            <div class="col-md-8">
                                <input id="education" type="checkbox" class="form-control mr-auto form-control-sm @error('education') is-invalid @enderror" name="education" value="{{ old('education') ?? 'true' }}" @if($user->preference->education) checked @endif autocomplete="education" autofocus>

                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="marketing" class="col-md-4 col-form-label"><h5>Marketing</h5></label>

                            <div class="col-md-8">
                                <input id="marketing" type="checkbox" class="form-control mr-auto form-control-sm @error('marketing') is-invalid @enderror" name="marketing" value="{{ old('marketing') ?? 'true' }}" @if($user->preference->marketing) checked @endif autocomplete="marketing" autofocus>

                                @error('marketing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="construction" class="col-md-4 col-form-label"><h5>Constructions</h5></label>

                            <div class="col-md-8">
                                <input id="construction" type="checkbox" class="form-control mr-auto form-control-sm @error('construction') is-invalid @enderror" name="construction" value="{{ old('construction') ?? 'true' }}" @if($user->preference->construction) checked @endif autocomplete="construction" autofocus>

                                @error('construction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="office" class="col-md-4 col-form-label"><h5>Office jobs</h5></label>

                            <div class="col-md-8">
                                <input id="office" type="checkbox" class="form-control mr-auto form-control-sm @error('office') is-invalid @enderror" name="office" value="{{ old('office') ?? 'true' }}" @if($user->preference->office) checked @endif autocomplete="office" autofocus>

                                @error('office')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label"><h5>Service</h5></label>

                            <div class="col-md-8">
                                <input id="service" type="checkbox" class="form-control mr-auto form-control-sm @error('service') is-invalid @enderror" name="service" value="{{ old('service') ?? 'true' }}" @if($user->preference->service) checked @endif autocomplete="service" autofocus>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="distance" class="col-md-4 col-form-label"><h5>Distance Jobs</h5></label>

                            <div class="col-md-8">
                                <input id="distance" type="checkbox" class="form-control mr-auto form-control-sm @error('distance') is-invalid @enderror" name="distance" value="{{ old('distance') ?? 'true' }}" @if($user->preference->distance) checked @endif autocomplete="distance" autofocus>

                                @error('distance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="engineering" class="col-md-4 col-form-label"><h5>Engineering</h5></label>

                            <div class="col-md-8">
                                <input id="engineering" type="checkbox" class="form-control mr-auto form-control-sm @error('engineering') is-invalid @enderror" name="engineering" value="{{ old('engineering') ?? 'true' }}" @if($user->preference->engineering) checked @endif autocomplete="engineering" autofocus>

                                @error('engineering')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row">
                            <label for="development" class="col-md-4 col-form-label"><h5>Developper</h5></label>

                            <div class="col-md-8">
                                <input id="development" type="checkbox" class="form-control mr-auto form-control-sm @error('development') is-invalid @enderror" name="development" value="{{ old('development') ?? 'true' }}" @if($user->preference->development) checked @endif autocomplete="development" autofocus>

                                @error('development')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row justify-content-between">
                            <label for="type" class="col-md-4 col-form-label"><h5>Part-time or Full-time</h5></label>

                            <div class="col-md-6">
                                
                                <select class="form-control" name="type" id="">
                                    <option value="{{ $user->preference->type }}">{{ $user->preference->type }}</option>
                                    <option value="Any">Any</option>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Full-time">Full-Time</option>
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
                            <label for="time" class="col-md-4 col-form-label"><h5>Permanent or Temporary</h5></label>

                            <div class="col-md-6">
                                
                                <select class="form-control" name="time" id="">
                                    <option value="{{ $user->preference->time }}">{{ $user->preference->time }}</option>
                                    <option value="Any">Any</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Temporary">Temporary</option>
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
                            <label for="time" class="col-md-6 col-form-label"><h5>Location</h5></label>

                            <div class="col-md-6">
                                
                                <select class="form-control" name="region" id="">
                                    <option value="{{ $user->preference->region }}">{{ $user->preference->region }}</option>
                                    <option value="Tashkent">Tashkent</option>
                                    <option value="Namangan">Namangan</option>
                                    <option value="Andijon">Andijon</option>
                                    <option value="Fargona">Fargona</option>
                                    <option value="Samarqand">Samarqand</option>
                                    <option value="Bukxoro">Bukxoro</option>
                                    <option value="Qashqadaryo">Qashqadaryo</option>
                                    <option value="Jizzax">Jizzax</option>
                                    <option value="Navoiy">Navoiy</option>
                                    <option value="Khorazm">Khorazm</option>
                                    <option value="Surxondaryo">Surxondaryo</option>
                                    <option value="Karaqalpakstan">Karaqalpakstan</option>
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
                            <label for="salary" class="col-md-4 col-form-label"><h5>Minimun Salary (in Uzb sum)</h5></label>

                            <div class="col-md-6">
                                <input id="salary" type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') ?? $user->preference->salary }}" autocomplete="salary" autofocus>

                                @error('salary')
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
