@extends('app-blank')
@section('content')
    <section id="parenting">
        <div class="bg-orange-700 ">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-24 sm:pt-32">
                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                    <img src="/images/parenting/parenting-title.png" class="mx-auto h-20">

                    <div class="mt-16 sm:space-y-2 space-y-4 lg:mt-20 lg:space-y-4">

                        <article class="relative   bg-white/[.3] rounded-2xl p-4 border border-white">
                            <div class="mb-4">
                                <span
                                    class="rounded-full font-medium bg-gray-50 my-4 px-3 py-1.5 text-gray-600 hover:bg-gray-100">{{ $article->category }}</span>
                            </div>
                            <h1 class="font-bold text-2xl text-white"> {{ $article->title }}</h1>

                            <div class="text-sm my-2">
                                <time datetime="2020-03-16"
                                    class="text-gray-100">{{ Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}</time>

                            </div>
                            <img src="{{ $article->image_url }}" alt=""
                                class="relative inset-0 h-full w-full rounded-2xl  object-cover">

                            <div>
                                <div class="flex items-center gap-x-4 text-xs">


                                </div>


                                <div class="text-md text-white "> {!! $article->content !!}</div>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>
            <div class="-mt-20">
                <img src="/images/parenting/bg-rumah.png" alt="">
            </div>
        </div>

    </section>
@endsection

