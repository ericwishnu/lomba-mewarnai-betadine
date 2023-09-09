@extends('layouts.admin.app')
@section('header')
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            <h1 class="text-lg font-semibold leading-6 text-gray-900">Parenting</h1>
        </div>
    </header>
@endsection

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Create Parenting Article</h1>
                {{-- <p class="mt-2 text-sm text-gray-700">Create parenting article</p> --}}
            </div>

        </div>

        <div class="mt-8 flow-root">
            <div class="flex -mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 justify-center items-center">
                <div class="inline-block min-w-5xl py-2 px-4 align-middle sm:px-6 lg:px-8 mx-auto ">
                    <div class="border-b border-gray-900/10 pb-12 ">

                        <form action={{ route('superadmin.parenting.store') }} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-full">
                                    <label for="title"
                                        class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                    <div class="mt-2">
                                        <input type="text" name="title" id="title"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('title')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="category"
                                        class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                                    <div class="mt-2">
                                        <input type="text" name="category" id="category"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('category')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="published_at"
                                        class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                                    <div class="mt-2">
                                        <textarea id="content" name="content" autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </textarea>
                                        @error('content')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-span-full">
                                    <label for="image"
                                        class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                                    <div class="mt-2">
                                        <input type="file" name="image" id="image"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('image_url')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="status"
                                        class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                                    <div class="mt-2">
                                        <select id="status" name="status"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                            <option value="0">Draft</option>
                                            <option value="1">Published</option>
                                        </select>
                                        @error('status')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-full">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Published At</label>
                                    <div class="mt-2">
                                        <input type="datetime-local" name="published_at" id="published_at"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('published_at')
                                            <span class="text-white">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <button type="submit"
                                        class="block rounded-md bg-orange-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
                                        Submit
                                    </button>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
