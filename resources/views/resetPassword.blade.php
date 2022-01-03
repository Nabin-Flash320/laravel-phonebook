<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} -- Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-green-300 flex justify-center">
    
    <div class="bg-green-400 absolute top-36 flex justify-center flex-co w-1/3 rounded-2xl px-10">
        <form class="flex flex-col p-10 w-full" action="{{ route('phonebook.reset.password' , ['verificationcode'=>$verification_code]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="new_password" class="block text-black text-xl font-medium ml-1">Enter new password</label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg 
            shadow-sm ml-1 mb-5" type="password" name="new_password">
            <label for="new_password" class="block text-black text-xl font-medium ml-1">Confirm new password</label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg 
            shadow-sm ml-1 mb-5" type="password" name="confirm_new_password">
            @if(session()->has('validationError'))
                <span class="ml-1 text-lg text-red-900">
                    {{ session()->get('validationError') }}
                </span>
            @endif
            <button class="ml-1 mt-3 h-9 text-xl border-2 rounded-full text-center border-black 
            bg-green-600 hover:bg-green-800 cursor-pointer" type="submit">Change</button>
            <a class="
                ml-1 mt-3 h-9 text-xl border-2 rounded-full text-center border-black 
                bg-green-600 hover:bg-green-800 cursor-pointer" 
                href="{{ route('phonebook') }}">
                Cancel
            </a>
        </form>
    </div>
    
</body>
</html>