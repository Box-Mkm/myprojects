@extends('layouts.app')

@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع{{ $project->title }}</a>
    </div>
    <div>
        <a href="/projects/{{ $project->id }}/edit" class="btn btn-primary px-4" role="button">تعديل المشروع</a>
    </div>
</header>
<section class="row text-right" dir="rtl">
    <div class="col-lg-4">
        {{-- Project Details --}}
        <div class="card">
            <div class="card-body">
                <div class="status">
                    @switch($project->status)
                        @case(1)
                            <span class="text-success">مكتمل</span>
                        @break

                        @case(2)
                            <span class="text-danger">ملغي</span>
                        @break

                        @default
                            <span class="text-warning">قيد الانجاز</span>
                    @endswitch
                    <h5 class="font-weight-bold card-title">
                        <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                    </h5>
                    <div class="card-text mt-4">
                        {{ $project->description }}
                    </div>
                    @include('projects.footer')
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="/projects/{{$project->id}}" method="POST">
                    @csrf
                    @method("PATCH")
                <select name="status" class="custom-select" onchange="this.form.submit()">
                    <option value="0" {{($project->status == 0) ? 'selected':""}}>قيد الانجاز</option>
                    <option value="1" {{($project->status == 1) ? 'selected':""}}>مكتمل</option>
                    <option value="2" {{($project->status == 2) ? 'selected':""}}>ملغي</option>
                </select>
            </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        {{-- Tasks --}}
    </div>
</section>
@endsection
