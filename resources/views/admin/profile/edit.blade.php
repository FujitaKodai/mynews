@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action ="{{ route('admin.profile.update') }}" method="post" enctype = "multipart/form-data">
                    @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class ="form-group row">
                        <label class = "col-md-2" for = "name">名前(name)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "name" value = "{{ old('name')}}">
                        </div>
                    </div>
                     <div class ="form-group row">
                        <label class = "col-md-2" for = "gender">性別(gender)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "gender" value = "{{ old('gender' }}">
                        </div>
                    </div>
                    <div class ="form-group row">
                         <label class = "col-md-2" for = "hobby">趣味(hobby)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "hobby" value = "{{ old('hoddy' }}">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label class = "col-md-2" for = "introduction">自己紹介(introduction)</label>
                        <div class = "col-md-10">
                            <textarea class = "form-control" name = "introduction" rows = "15">{{ old('introduction' }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type = "submit" class = "btn btn-primary" value = "更新">
                </form>
            </div>
        </div>
    </div>
@endsection