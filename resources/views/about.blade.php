<div>

    <x-message-banner msg="User singup Successfully" class="success" />
   <x-message-banner msg="User singup Successfully" class="success" />
   <br>
   <br>
   <br>
   <x-message-banner msg="try agin" class="error" />
   <x-message-banner msg="warning error" class="warning" />
    <h1>About page</h1>
    @include('common.header')

    <style>
        .success {
            background-color: lawngreen;
            color: green;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }

        .error {
            background-color: rgb(198, 111, 111);
            color: red;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }

        .warning {
            background-color: rgb(214, 241, 39);
            color: rgb(101, 166, 226);
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }

    </style>
</div>
