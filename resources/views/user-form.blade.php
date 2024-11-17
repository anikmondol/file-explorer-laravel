<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    {{-- <h2>Add New User</h2>
    <form action="addUser" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="name" id="" placeholder="enter user name">
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" id="" placeholder="enter user email">
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" id="" placeholder="enter user city">
        </div>
        <div class="input-wrapper">
            <button name="submit">Add New User</button>
        </div>
    </form> --}}

    {{-- <h1>user from</h1>
    <form action="addUser" method="POST">
        @csrf
        <div>
            <h4>User skill</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="node">
            <label for="node">NODE</label>
            <input type="checkbox" name="skill[]" value="java" id="java">
            <label for="java">JAVA</label>
        </div>

        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h4>Gender</h4>
            <select name="city" id="">
                <option value="Dhaka">Dhaka</option>
                <option value="Barishal">Barishal</option>
                <option value="Chattogram">Chattogram</option>
                <option value="Cumilla">Cumilla</option>
            </select>
        </div>

        <div>
            <h4>Age</h4>
            <input type="range" name="age" id="" min="18" max="100">
        </div>
        <div>
            <button>Add to User</button>
        </div>

    </form> --}}
{{--
    @if ($errors->any())

    @foreach ($errors->all() as $error)
    <div style="color: red; margin-bottom: 10px">
        {{$error}}
    </div>
    @endforeach

    @endif --}}

    <form action="addUser" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="name" id="" placeholder="enter user name" value="{{old('name')}}" class="{{$errors->first('name')?'input-error':''}}">
            <span style="color: red">@error('name')
                {{$message}}
            @enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" id="" placeholder="enter user email" value="{{old('email')}}" class="{{$errors->first('email')?'input-error':''}}">
            <span style="color: red">@error('email')
                {{$message}}
            @enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" id="" placeholder="enter user city" value="{{old('city')}}" class="{{$errors->first('city')?'input-error':''}}">
            <span style="color: red">@error('city')
                {{$message}}
            @enderror</span>
        </div>
        <div class="input-wrapper">
            <button name="submit">Add New User</button>
        </div>
    </form>

</div>

<style>
   .input-wrapper input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        padding: 10px;
    }

    .input-wrapper {
        margin-bottom: 10px
    }

    .input-error{
        border: 1px solid rgb(21, 34, 216) !important;
        color: rgb(14, 182, 233) !important;
    }

    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: white;
        background-color: rgb(105, 217, 230);
        cursor: pointer;
        margin-top: 10px
    }
</style>
