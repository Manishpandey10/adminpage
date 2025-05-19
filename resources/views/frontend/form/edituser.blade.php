@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> a user from dashboard</h4>
                            <span class="text-danger">
                                {{ session()->get('registererror') }}
                            </span>
                            <p class="card-description">Add new user</p>
                            <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('update.user',$user->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" class="form-control" name="username" id="exampleInputUsername1"
                                        placeholder="Username" value="{{ $user->username }}" />
                                        <span class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        placeholder="Email" value="{{ $user->email }}"/>
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                        placeholder="Password" />
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="password_confirmation"
                                        placeholder="Password" />
                                        <span class="text-danger">
                                            @error('password_confirmation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect2">Choose your country</label>
                                    <select class="form-select form-select-lg" name="country"
                                        id="exampleFormControlSelect2">
                                        <option>Country</option>
                                        <option>India</option>
                                        <option>United States of America</option>
                                        <option>United Kingdom</option>
                                        <option>Germany</option>
                                        <option>Argentina</option>
                                    </select>
                                </div>

                                <div>
                                    <button type="submit"  class="btn btn-primary me-2">Submit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                        @endsection
