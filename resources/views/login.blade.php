<x-layout>

    <div class="flex w-screen flex-wrap text-slate-800">
        <div
            class="relative hidden h-screen select-none flex-col justify-center bg-blue-600 text-center md:flex md:w-1/2">
            <div class="mx-auto py-16 px-8 text-white xl:w-[40rem]">
                <span class="rounded-full bg-white px-3 py-1 font-medium text-blue-600">Laraval 11</span>
            </div>
            <img class="mx-auto w-11/12 max-w-lg rounded-lg object-cover"
                src="https://e7.pngegg.com/pngimages/764/304/png-clipart-laravel-black-logo-tech-companies-thumbnail.png" />
        </div>
        <div class="flex w-full flex-col md:w-1/2">
            <div class="my-auto mx-auto flex flex-col justify-center px-6 pt-8 md:justify-start lg:w-[28rem]">
                <p class="text-center text-3xl font-bold md:text-left md:leading-tight">Create your free account</p>

                <form class="flex flex-col items-stretch pt-3 md:pt-8" method="POST" action="{{ route('loginuser') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                            <input type="text" name="name" id="login-name" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Name" />
                        </div>
                    </div>
                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                            <input type="email" name="email" id="login-email" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Email" />
                        </div>
                    </div>
                    <div class="mb-4 flex flex-col pt-4">
                        <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                            <input type="password" name="password" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Password (minimum 8 characters)" />
                        </div>
                    </div>
                    <button type="submit" class="mt-6 rounded-lg bg-blue-600 px-4 py-2 text-center text-base font-semibold text-white shadow-md outline-none ring-blue-500 ring-offset-2 transition hover:bg-blue-700 focus:ring-2 md:w-32">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
