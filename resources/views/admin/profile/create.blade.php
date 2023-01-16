
@extends('layouts.profile')

@section('title','プロフィール作成画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                  <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-date">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($error->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class = "form-group row"> 
                        <label class = "col-md-2">氏名(name)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "title" value = "{{ old('title') }}">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label class = "col-md-2">性別(gender)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "title" value = "{{ old('title') }}">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label class = "col-md-2">趣味(hobby)</label>
                        <div class = "col-md-10">
                            <input type = "text" class = "form-control" name = "title" value = "{{ old('title') }}">
                        </div>
                    </div>
                      <div class = "form-group row"> 
                        <label class = "col-md-2">自己紹介(introduction)</label>
                        <div class = "col-md-10">
                            <textarea type = "text" class = "form-control" name = "title" value = "{{ old('title') }}"></textarea>
                        </div>
                    </div>
                    @csrf
                    <input type ="submit" class = "btn btn-primary" value = "更新">
                </form>
            </div>
        </div>
    </div>
@endsection