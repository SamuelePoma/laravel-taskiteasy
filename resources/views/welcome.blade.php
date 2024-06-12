<x-layout.main>
    <div class="navbar">
        <div class="navbar-start">
            <div class="block">
                <h1 class="title is-4">My TODOs</h1>
                <h2 class="subtitle is-6 is-italic">
                    Completing your tasks brings a sense of achievement, increases productivity,
                    reduces stress, and helps you manage your time effectively. It creates a
                    positive feedback loop, encourages you to prioritize important tasks, and
                    provides opportunities to reward yourself. So, dive in, conquer your tasks,
                    and enjoy the numerous benefits that come with it! You've got this!
                </h2>
            </div>
        </div>
        <div class="navbar-end">
            <a href="{{ route('tasks.create') }}" class="button is-primary">Create a New Task</a>
        </div>
    </div>
    <div class="block">
        @foreach($tasks as $task)
            <x-task.list-item :task="$task"></x-task.list-item>
        @endforeach
    </div>

            {{-- Link to 404 page --}}
    <a href="{{ route('error.404') }}" class="button is-danger">Page Not Found</a>
    <a href="{{ route('error.500') }}" class="button is-warning">Page Not Found</a>




</x-layout.main>
