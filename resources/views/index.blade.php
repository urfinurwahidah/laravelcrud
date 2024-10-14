<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="bg-cover bg-center h-screen" style="background-image: url('asset/img/bg.png');">
        <div class="h-lvh w-lvh bg-none backdrop-blur-sm content-center">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-center mt-6">
                        <a href="#"
                            class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
                            <img class="w-20 h-25 mr-2" src="asset/img/lg.png" alt="logo">
                        </a>
                    </div>
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-sm font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center dark:text-white">
                            Kantor Kementerian Agama Kota Pekalongan 
                        </h1>
                        <form action="/" method="post">
                            @csrf
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="show password" class="text-primary-600 hover:underline dark:text-primary-500">Show Password</label>
                                    </div>
                                </div>
                                    <div class="mt-6 flex justify-center">
                                        <button type="button" class="px-5 py-3 text-base font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Login
                                        </button>
                                    </div>                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>