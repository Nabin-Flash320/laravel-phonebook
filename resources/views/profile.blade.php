<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>User profile</title>
</head>
<body class="bg-green-300 flex justify-center flex-col m-0 p-0">

        <nav class="w-full h-14 top-0 flex justify-center items-center mt-5">
            <div class="absolute left-20 top-7">Phonebook</div>
            <div class="absolute top-7">
                <form action="#">
                    <input autocomplete="off" class="w-50 h-10 text-xl border-green-600 rounded-lg shadow-sm ml-1 mb-5
                        bg-gray-200 focus:bg-gray-100"
                        type="text">
                    <button class="h-10 bg-green-500 hover:bg-green-700 text-black 
                        py-2 px-4 rounded-xl">
                        Search
                    </button>
                </form>
            </div>
            <button class="bg-green-500 hover:bg-green-700 
                text-black py-2 px-4 rounded-xl absolute top-7 right-44">
                Create User
            </button>
            <button class="bg-green-500 hover:bg-green-700 
                text-black py-2 px-4 rounded-xl absolute top-7 right-20">
                Profile
            </button>
        </nav>

        <div class="w-4/5 m-10 mr-10 flex flex-col">
            
            <button class="bg-green-500 hover:bg-green-700 h-10 w-24 
                absolute right-44 rounded-xl">Save New
            </button>

            <table class="w-4/5 absolute top-40 left-32 border bg-green-400">

                <thead>
                    <tr class="border-b">
                        <th class="p-2 border-r cursor-pointer font-bold text-black">Name</th>
                        <th class="p-2 border-r cursor-pointer font-bold text-black">Phone number</th>
                        <th class="p-2 border-r cursor-pointer font-bold text-black">Address</th>
                        <th class="p-2 border-r cursor-pointer font-bold text-black">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b mb-10">
                        <th class="p-2 border-r cursor-pointer font-thin text-20 text-white">Name</th>
                        <th class="p-2 border-r cursor-pointer font-thin text-20 text-white">Phone number</th>
                        <th class="p-2 border-r cursor-pointer font-thin text-20 text-white">Address</th>
                        <th class="p-2 border-r cursor-pointer font-thin text-20 text-white">
                            <div class="flex flex-row">
                                <button class="bg-green-500 hover:bg-green-700 
                                text-black py-1 ml-2 relative left-10 w-2/6 rounded-xl ">Edit</button>
                                <button class="bg-green-500 hover:bg-green-700 
                                text-black py-1 ml-2 relative left-12 w-2/6 rounded-xl ">Delete</button>
                            </div>
                        </th>
                    </tr>  
                </tbody>
                
            </table>

        </div>

</body>
</html>