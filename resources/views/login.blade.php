<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="" class="">

    <form action="{{route('login.store')}}" method="post">
        @csrf
        <div class="flex flex-col items-center justify-center h-screen">
            @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                {{ session('error') }}
            </div>            
         @endif
         
            <div class="w-full md:w-1/2 lg:w-1/3 mx-auto">
                <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
                    <h1 class="font-bold text-center text-5xl mb-4">Barbería</h1>
                    <div class="mb-4"> 
                        <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="email">
                            Email
                        </label>    
                        <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="username" type="text" placeholder="Username">
                        @error('email')
                            <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                                {{ $message }}
                            </div>            
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="password">
                            Password
                        </label>
                        <input name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="password" type="password" placeholder="Password">
                        @error('password')
                            <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                                {{ $message }}
                            </div>            
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="animation-spin bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Log in
                        </button>
                        <a href="/register" class="text-blue-500 hover:text-blue-800 text-sm">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>