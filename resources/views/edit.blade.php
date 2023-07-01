@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                <form method="POST"  action="{{ route('update') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="firstname" class="col-md-4 col-form-label text-md-end">First Name</label>

                        <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $val->firstname }}" required autocomplete="firstname" autofocus>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="lastname" class="col-md-4 col-form-label text-md-end">Last Name</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $val->lastname }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $val->email }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="phonenumber" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phonenumber" type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ $val->phonenumber }}" required autocomplete="phonenumber" autofocus>

                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="age" class="col-md-4 col-form-label text-md-end">Age</label>

                        <div class="col-md-6">
                            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $val->age }}" required autocomplete="age" autofocus>

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="age" class="col-md-4 col-form-label text-md-end">Select Gender</label>

                        <div class="col-md-6">
                        

                            <select id="gender" class="form-control @error('age') is-invalid @enderror" name="gender" autocomplete="gender" autofocus required>
                                <option>Select Gender</option>
                                <option value="Male" @if($val->gender == "Male")selected @endif>Male</option>
                                <option value="Female" @if($val->gender == "Female")selected @endif>Female</option>
                                <option value="Other" @if($val->gender == "Other")selected @endif>Other</option>
                            </select>




                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="birthdate" class="col-md-4 col-form-label text-md-end">Date Of Birth </label>

                        <div class="col-md-6">
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $val->birthdate }}" required autocomplete="birthdate" autofocus>

                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                

                    <div class="row mb-3">
                        <label for="bio" class="col-md-4 col-form-label text-md-end">Bio </label>

                        <div class="col-md-6">
                            <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ $val->bio }}" required autocomplete="bio" autofocus>

                            @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection