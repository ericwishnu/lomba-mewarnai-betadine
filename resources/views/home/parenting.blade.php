<section id="parenting">
    <div class="bg-orange-700 z-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-24 sm:pt-32">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <img src="/images/parenting/parenting-title.png" class="mx-auto h-20">

                <div class="mt-16 sm:space-y-2 space-y-4 lg:mt-20 lg:space-y-4">
                    @if (count($articles) > 0)
                        @foreach ($articles as $article)
                            <article
                                class="relative isolate flex flex-col gap-8 lg:flex-row bg-white/[.3] rounded-2xl p-4 border border-white">
                                <div class="relative aspect-[1/1] sm:aspect-[1/1] lg:aspect-square lg:w-64 lg:shrink-0">
                                    <img src="{{ $article->image_url }}" alt=""
                                        class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                                <div>
                                    <div class="flex items-center gap-x-4 text-xs">

                                        <a href="{{ route('parenting.show', ['slug' => $article->slug]) }}"
                                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->category }}</a>
                                    </div>
                                    <div class="group relative max-w-xl">
                                        <h2
                                            class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-orange-100">
                                            <a href="{{ route('parenting.show', ['slug' => $article->slug]) }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $article->title }}
                                            </a>
                                            </h3>

                                    </div>
                                    <div class="flex items-center gap-x-4 text-sm mt-4">
                                        <time datetime="2020-03-16"
                                            class="text-gray-100">{{ Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}</time>

                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="mt-6 text-center justify-center">
                            <a href="{{ route('parenting') }}"
                                class="rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm  ">
                                <img src="/images/parenting/baca-lagi.png" class="h-20  mx-auto" />
                            
                            </a>
                        </div>
                    @else
                        <p class="text-white text-center">No Data Available</p>

                        
                    @endif
                    <!-- More posts... -->
                </div>
            </div>
        </div>
        <div class="-mt-20">
            <img src="/images/parenting/bg-rumah.png" alt="">
        </div>
    </div>

</section>
