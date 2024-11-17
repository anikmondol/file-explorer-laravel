<div>
    <h1>home page</h1>
    <a href="/about">About</a>
    <h3>
        {{-- {{ URL::current() }} --}}
        {{url()->current()}}
    </h3>
    <h3>
        {{-- {{ URL::full() }} --}}
        {{url()->full()}}
    </h3>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
