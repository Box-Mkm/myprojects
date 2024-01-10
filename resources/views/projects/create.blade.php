<style>
    .form-control{
        background-color: white !important;
    }
</style>
@extends('layouts.app')
@section('title', 'انشاء مشروع جديد')
@section('content')
    <div class="row justify-content-center text-right">
        <div class="col-10">
            <h3 class="text-center pb-5 font-weight-bold">
                مشروع جديد
            </h3>
            <form action="/projects" method="POST" dir="rtl">
                @csrf
                <div class="form-group">
                    <label for="title">عنوان المشروع</label>
                    <input type="text" class="form-control" id="title" name="title">

                </div>
                <div class="form-group">
                    <label for="description">وصف المشروع</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

                </div>
                <div class="form-group">
                <br>
                    <button type="submit" class="btn btn-primary">انشاء</button>
                    <a href="/projects" class="btn btn-light">الغاء</a>
                </div>

            </form>
        </div>
    </div>
@endsection
