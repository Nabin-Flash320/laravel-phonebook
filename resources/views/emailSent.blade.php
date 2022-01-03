<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} -- Password Reset Link</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-green-300 flex justify-center">
    
    <div class="bg-green-400 absolute top-36 flex justify-center flex-co w-1/3 rounded-2xl px-10">
        <div class="flex flex-col p-10 w-full">
            <span class="block text-black text-xl font-medium ml-5" for="email">Link email sent successfully</span>
            <a class="
                ml-1 mt-3 h-9 text-xl border-2 rounded-full text-center border-black 
                bg-green-600 hover:bg-green-800 cursor-pointer" 
                href="{{ route('phonebook.login') }}">
                Ok
            </a>
        </div>
    </div>
    
</body>
</html>