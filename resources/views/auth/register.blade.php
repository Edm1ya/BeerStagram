@extends('./layouts.app')

@section('title')
    Register
@endsection


@section('content')
    <h2 class="text-center text-3xl font-extrabold my-10">Register on BeerStragram</h2>
    <div class="flex container my-5 mx-auto md:justify-center md:items-center gap-5">
        <form action="{{ route('register') }}" method="POST"
            class="w-full md:w-10/12 lg:w-6/12 bg-white p-3 rounded-lg shadow-lg">
            @csrf
            <div class="mb-5">
                <label for="name" class="block text-gray-500 font-bold pb-2 uppercase">name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}"
                    class="border shadow w-full rounded-lg p-3 @error('name') border-red-600 @enderror">

                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="block text-gray-500 font-bold pb-2 uppercase">username</label>
                <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}"
                    class="w-full rounded-lg p-3 border shadow  @error('name') border-red-600 @enderror">
                @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="block text-gray-500 font-bold pb-2 uppercase">email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    class="w-full rounded-lg p-3 border shadow  @error('name') border-red-600 @enderror">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block text-gray-500 font-bold pb-2 uppercase">password</label>
                <input type="password" id="password" name="password" placeholder="Password"
                    class="w-full rounded-lg p-3 border shadow  @error('name') border-red-600 @enderror">
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="block text-gray-500 font-bold pb-2 uppercase">password
                    confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Password Confirmation"
                    class="w-full rounded-lg p-3 border shadow-lg  @error('name') border-red-600 @enderror">
                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Send"
                class="bg-blue-600 w-full text-white font-bold cursor-pointer py-2 text-2xl rounded-lg mt-5">
        </form>
        <div class="w-4/12 lg:w-6/12 hidden lg:block">
            <img src="{{ asset('img/register.jpg') }}" alt="image register users">
        </div>
    </div>
@endsection
