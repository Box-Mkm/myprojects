<div class="card-footer bg-transparent" dir="rtl">
    <div class="d-flex">
        <div class="d-flex align-items-center">
            <img src="images/clock.svg" alt="">
            <div class="mr-2">
                {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div class="d-flex align-items-center mx-4">
            <img src="images/check-list.svg" alt="">
            <div class="mr-2">

            </div>
        </div>
        <div class="d-flex align-items-center me-auto p-2 bd-hightlight">
            <form action="projects/{{$project->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn-delete">
            </form>
        </div>
    </div>
</div>
