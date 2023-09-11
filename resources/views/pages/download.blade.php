@extends('app-blank')
@section('content')
    <section id="download">

        <div class="bg-gradient-to-r from-orange-500 to-orange-400 mx-auto py-24 sm:px-6 sm:py-32 ">
            <div class="mx-auto max-w-xl">
                <img src="/images/download/download-title.png" class="mx-auto h-20  my-8">

                <a href="/images/template-gambar-a4.jpg" download="template-gambar-a4.jpg" target="_blank">
                    <img src="/images/download/download-button.png" class="mx-auto h-12 my-8">
                </a>
                <h2 class="font-bold font-sans text-white text-center text-lg my-8">Print gambar pada kertas ukuran A4</h2>
                <div
                    class="relative isolate flex flex-col gap-8 mx-4 lg:flex-row bg-white/[.3] shadow-2xl rounded-3xl p-4 border border-white">

                    <ul class="list-disc text-white mx-4 my-4">
                        <li>
                            Peserta mewarnai dengan krayon/pensil warna
                        </li>
                        <li class="mt-4">
                            Setelah selesai diwarnai, upload karya ke Instagram yang sudah dicantumkan pada saat registrasi,
                            tag <strong>@betadineindonesia</strong>
                            dan sertakan hashtag <strong>#BetadineUnstoppableDreams</strong>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
@endsection
