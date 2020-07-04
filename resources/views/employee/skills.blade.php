@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <!-- START || WELCOME CARD -->
            <div class="card">
                <div class="card-header"><h5>Hello {{ $user->firstname }} {{ $user->lastname }}, please rate your skills. <br> <strong>Range 0 - 10</strong></h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- START FORM SECTION FOR INPUTS -->
                
                    <form action="/employee/{{ $user->id }}/updateskills" class="form-group" method="post"> 
                        @csrf
                        @method('PATCH')

                         <!-- START SIGLE FORM INPUT -->
                    <div class="form-group row align-items-center">
                            
                            <h5 for="designing" class="col-md-4">Designing & Photo/Vidoe editing</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="designing" type="range"  class="mr-2 ml-2 custom-range @error('designing') is-invalid @enderror" name="designing" min="0" max="10" step="1" value="{{ $user->skills->designing ?? 0}}" autocomplete="designing" autofocus> 10

                                @error('designing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <h5>Programming:</h5>
                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="web" class="col-md-4 col-form-label">Web development</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="web" type="range"  class="mr-2 ml-2 custom-range @error('web') is-invalid @enderror" name="web" min="0" max="10" step="1" value="{{ $user->skills->web ?? 0 }}" autocomplete="web" autofocus> 10

                                @error('web')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="desktop" class="col-md-4 col-form-label">Desktop development</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="desktop" type="range"  class="mr-2 ml-2 custom-range @error('desktop') is-invalid @enderror" name="desktop" min="0" max="10" step="1" value="{{ $user->skills->desktop ?? 0 }}" autocomplete="desktop" autofocus> 10

                                @error('desktop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="mobile" class="col-md-4 col-form-label">Mobile development</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="mobile" type="range"  class="mr-2 ml-2 custom-range @error('mobile') is-invalid @enderror" name="mobile" min="0" max="10" step="1" value="{{ $user->skills->mobile ?? 0 }}" autocomplete="mobile" autofocus> 10

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="machine" class="col-md-4 col-form-label">Machine Learning</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="machine" type="range"  class="mr-2 ml-2 custom-range @error('machine') is-invalid @enderror" name="machine" min="0" max="10" step="1" value="{{ $user->skills->machine ?? 0 }}" autocomplete="machine" autofocus> 10

                                @error('machine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->
                        

                        <!-- START SIGLE FORM INPUT -->
                        <h5>Language:</h5>
                        <div class="form-group row align-items-center">
                            
                            <label for="uzbek" class="col-md-4 col-form-label">Uzbek</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="uzbek" type="range"  class="mr-2 ml-2 custom-range @error('uzbek') is-invalid @enderror" name="uzbek" min="0" max="10" step="1" value="{{ $user->skills->uzbek ?? 0 }}" autocomplete="uzbek" autofocus> 10

                                @error('uzbek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="english" class="col-md-4 col-form-label">English</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="english" type="range"  class="mr-2 ml-2 custom-range @error('english') is-invalid @enderror" name="english" min="0" max="10" step="1" value="{{ $user->skills->english ?? 0 }}" autocomplete="english" autofocus> 10

                                @error('english')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="russian" class="col-md-4 col-form-label">Russian</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="russian" type="range"  class="mr-2 ml-2 custom-range @error('russian') is-invalid @enderror" name="russian" min="0" max="10" step="1" value="{{ $user->skills->russian ?? 0 }}" autocomplete="russian" autofocus> 10

                                @error('russian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="spanish" class="col-md-4 col-form-label">Spanish</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="spanish" type="range"  class="mr-2 ml-2 custom-range @error('spanish') is-invalid @enderror" name="spanish" min="0" max="10" step="1" value="{{ $user->skills->spanish ?? 0 }}" autocomplete="spanish" autofocus> 10

                                @error('spanish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <label for="german" class="col-md-4 col-form-label">German</label>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="german" type="range"  class="mr-2 ml-2 custom-range @error('german') is-invalid @enderror" name="german" min="0" max="10" step="1" value="{{ $user->skills->german ?? 0 }}" autocomplete="german" autofocus> 10

                                @error('german')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="leadership" class="col-md-4">Leadership</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="leadership" type="range"  class="mr-2 ml-2 custom-range @error('leadership') is-invalid @enderror" name="leadership" min="0" max="10" step="1" value="{{ $user->skills->leadership ?? 0 }}" autocomplete="leadership" autofocus> 10

                                @error('leadership')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="critical" class="col-md-4">Critical thinking</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="critical" type="range"  class="mr-2 ml-2 custom-range @error('critical') is-invalid @enderror" name="critical" min="0" max="10" step="1" value="{{ $user->skills->critical ?? 0 }}" autocomplete="critical" autofocus> 10

                                @error('critical')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="strategy" class="col-md-4">Strategic planning</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="strategy" type="range"  class="mr-2 ml-2 custom-range @error('strategy') is-invalid @enderror" name="strategy" min="0" max="10" step="1" value="{{ $user->skills->strategy ?? 0 }}" autocomplete="strategy" autofocus> 10

                                @error('strategy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="project" class="col-md-4">Project scheduling</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="project" type="range"  class="mr-2 ml-2 custom-range @error('project') is-invalid @enderror" name="project" min="0" max="10" step="1" value="{{ $user->skills->project ?? 0 }}" autocomplete="project" autofocus> 10

                                @error('project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="management" class="col-md-4">Management</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="management" type="range"  class="mr-2 ml-2 custom-range @error('management') is-invalid @enderror" name="management" min="0" max="10" step="1" value="{{ $user->skills->management ?? 0 }}" autocomplete="management" autofocus> 10

                                @error('management')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="communication" class="col-md-4">Communicational skills</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="communication" type="range"  class="mr-2 ml-2 custom-range @error('communication') is-invalid @enderror" name="communication" min="0" max="10" step="1" value="{{ $user->skills->communication ?? 0 }}" autocomplete="communication" autofocus> 10

                                @error('communication')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="entrepreneur" class="col-md-4">Entrepreneurship</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="entrepreneur" type="range"  class="mr-2 ml-2 custom-range @error('entrepreneur') is-invalid @enderror" name="entrepreneur" min="0" max="10" step="1" value="{{ $user->skills->entrepreneur ?? 0 }}" autocomplete="entrepreneur" autofocus> 10

                                @error('entrepreneur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="marketing" class="col-md-4">Marketing</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="marketing" type="range"  class="mr-2 ml-2 custom-range @error('marketing') is-invalid @enderror" name="marketing" min="0" max="10" step="1" value="{{ $user->skills->marketing ?? 0 }}" autocomplete="marketing" autofocus> 10

                                @error('marketing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="driving" class="col-md-4">Driving <br> <small>If you have licence</small></h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="driving" type="range"  class="mr-2 ml-2 custom-range @error('driving') is-invalid @enderror" name="driving" min="0" max="10" step="1" value="{{ $user->skills->driving ?? 0 }}" autocomplete="driving" autofocus> 10

                                @error('driving')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <!-- END SIGLE FORM INPUT -->

                        <!-- START SIGLE FORM INPUT -->
                        <div class="form-group row align-items-center">
                            
                            <h5 for="hardware" class="col-md-4">Computer hardware</h5>

                            <div class="col-md-8 d-flex justify-content-center">
                                0 <input id="hardware" type="range"  class="mr-2 ml-2 custom-range @error('hardware') is-invalid @enderror" name="hardware" min="0" max="10" step="1" value="{{ $user->skills->hardware ?? 0 }}" autocomplete="hardware" autofocus> 10

                                @error('hardware')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
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
