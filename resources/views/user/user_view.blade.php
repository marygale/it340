@extends('layouts.header')
@section('breadcrumbs')
    <ul class="page-breadcrumb">
        <li>
            <a href="javascript;">User</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>View User</span>
        </li>
    </ul>
@endsection
@section('content')
    <div class="room-title-box">
        <h1 class="page-title"> Edit User</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add User</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name
                                    <span class="required" aria-required="true">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address
                                    <span class="required" aria-required="true">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group form-md-checkboxes">
                                <label class="col-md-4 control-label" for="form_control_1">Status
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <div class="col-md-6">
                                    <div class="md-checkbox-inline">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox1_3" name="status" value="1" class="md-check">
                                            <label for="checkbox1_3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Active</label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox1_4" name="status" value="0" class="md-check">
                                            <label for="checkbox1_4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Inactive </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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
