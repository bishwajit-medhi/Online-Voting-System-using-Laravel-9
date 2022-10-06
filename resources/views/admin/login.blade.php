<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-grey-50">
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <section class="h-screen">
              <div class="px-6 h-full text-gray-800">
                <div
                  class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
                >

                  <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form>
                      <div class="flex flex-row items-center justify-center lg:justify-start mb-3">
                        <p class="text-lg mb-0 mr-4">Admin Login</p>
                      </div>
    
            
                      <!-- Email input -->
                      <div class="mb-6">
                        <input type="email" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" placeholder="Email address">
                      </div>
            
                      <!-- Password input -->
                      <div class="mb-6">
                        <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password" placeholder="Password"/>
                      </div>
                      <div class="text-center lg:text-left">
                        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                          Login
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
        </form>
    </div>
</body>
</html>