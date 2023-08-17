@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDİT PROFILE</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateInfo') }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{session('userName')}}" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" value="{{session('userEmail')}}" name="email" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mb-3" style="width: 200px;">UPDATE INFORMATION</button>
                                @if(session('updateInfo'))
                                <div class="alert alert-success col-md-9">
                                    {{ session('updateInfo') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('updatePassword') }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('OLD Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newpassword" class="col-md-4 col-form-label text-md-end">{{ __('NEW password') }}</label>

                            <div class="col-md-6">
                                <input id="newpassword" type="password" class="form-control" name="newpassword" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mb-3" style="width: 200px;">UPDATE PASSWORD</button>
                                @if ($errors->has('falsePassword'))
                                <div class="alert alert-danger col-md-9 ">
                                    {{ $errors->first('falsePassword') }}
                                </div>
                                @endif

                                @if(session('correctPassword'))
                                <div class="alert alert-success col-md-9">
                                    {{ session('correctPassword') }}
                                </div>
                                @endif

                            </div>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('userDelete') }}">
                        @csrf
                        @method('DELETE')
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger" style="width: 200px;">DELETE ACCOUNT</button>
                                @if(session('delete'))
                                <div class="alert alert-success col-md-9">
                                    {{ session('delete') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection