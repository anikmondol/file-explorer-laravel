<x-layout>
    <x-slot name="title">Login</x-slot>
    <x-slot name="main">
        <div>
            <h1 id="heading" style="color: red">This is a Heading</h1>


                    <input type="text" name="name" placeholder="enter name">
                    <br>
                    <br>
                    <input type="email" name="email" placeholder="enter email">
                    <br>
                    <br>
                    <input type="password" name="password" placeholder="enter password">
                    <br>
                    <br>
                    <button onclick="toggleColor()">Submit</button>

    </x-slot>
</x-layout>
