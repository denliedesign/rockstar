<div class="my-4">
    <p class="lead mb-0">{{ $lesson->name }}</p>
    <p class="my-1">
        <span class="px-3 rounded" style="border: 1px solid black;">Ages {{ $lesson->age }} years</span><span
            class="px-3 rounded mx-3" style="border: 1px solid black;">{{ $lesson->time }}</span>
    </p>
    <p>
        {{ $lesson->description }}
    </p>
    @can('update', \App\Lesson::class)
        <div class="mb-2 d-flex align-items-center">
            <div><a href="/lessons/{{ $lesson->id }}/edit">Edit Lesson</a></div>
            <div class="mx-3">
                <form action="/lessons/{{ $lesson->id }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                </form>
            </div>
        </div>
        <hr>
    @endcan
</div>
