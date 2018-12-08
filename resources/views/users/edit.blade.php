<?php
/**
 * Created by '深圳市阿翼互联网有限公司'.
 * User: '阿翼'
 * Date: 2018/12/8
 * Time: 12:21
 *版权归深圳市阿翼互联网有限公司所有，如有侵权依法追究
 */
?>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>

            <div class="panel-body">

                <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="email-field">邮 箱</label>
                        <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
