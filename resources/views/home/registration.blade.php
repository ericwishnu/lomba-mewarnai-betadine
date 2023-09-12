<section id="registrasi">

    <div class=" bg-orange-500 mx-auto py-24 sm:px-6 sm:py-32 ">
        <div class="mx-auto max-w-2xl">
            <img src="/images/registrasi/registrasi.png" class="mx-auto h-12">
            <h2 class="font-bold font-sans text-white text-center">Isi Data Berikut</h2>
            <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data" id="pesertaSubmitForm">
                {{-- <form id="pesertaSubmitForm"  enctype="multipart/form-data"> --}}
                @csrf
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 ">
                        <div class="flex flex-col md:flex-row sm:col-span-12 mx-4">
                            <label for="nama-ibu"
                                class="w-full md:w-1/5 lg:basis-1/5 p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Nama
                                Ibu
                            </label>
                            <div class="mt-2 w-full md:w-4/5 ">
                                <input type="text" name="nama_ibu" id="nama-ibu" autocomplete="given-name"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('nama_ibu')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row sm:col-span-12   mx-4">
                            <label for="nama-anak"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Nama
                                Anak
                            </label>
                            <div class="mt-2 w-full md:w-4/5 ">
                                <input type="text" name="nama_anak" id="nama-anak" autocomplete="given-name"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('nama_anak')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row sm:col-span-12  mx-4">
                            <label for="usia-anak"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Usia
                                Anak
                            </label>
                            <div class="mt-2 w-full md:w-4/5 ">
                                <input type="number" min="1" name="usia_anak" id="usia-anak"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('usia_anak')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row sm:col-span-12  mx-4">
                            <label for="kartu-pelajar"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Kartu
                                Pelajar Anak
                            </label>
                            <div class="mt-2 w-full md:w-4/5 ">
                                <input type="file" name="kartu_pelajar" id="kartu-pelajar" accept="image/*"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 bg-yellow-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <p class="text-white">(*Maksimal kelas 3 SD)</p>
                                @error('kartu_pelajar')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="flex flex-col md:flex-row sm:col-span-12   mx-4">
                            <label for="email"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Email
                            </label>
                            <div class="mt-2 w-full md:w-4/5 ">
                                <input type="email" min="1" name="email" id="email"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('email')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row sm:col-span-12   mx-4">
                            <label for="phone"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Nomor
                                Handphone
                            </label>
                            <div class="mt-2 basis-4/5">
                                <input type="text" min="1" name="phone" id="phone"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('phone')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row  sm:col-span-12 mx-4">
                            <label for="instagram"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Instagram
                            </label>
                            <div class="mt-2  w-full md:w-4/5 ">
                                <input type="text" min="1" name="instagram" id="instagram"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('instagram')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row  sm:col-span-12 mx-4">
                            <label for="bukti-belanja"
                                class="w-full md:w-1/5  p-2 font-sans object-center block text-lg font-bold leading-8 text-white">Struk
                                / Bukti Pembelian Betadine
                            </label>
                            <div class="mt-2  w-full md:w-4/5 ">
                                <input type="file" name="bukti_belanja" id="bukti-belanja" accept="image/*"
                                    class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 bg-yellow-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <p class="text-white">(*September - Oktober 2023)</p>
                                @error('bukti_belanja')
                                    <span class="text-white">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="mt-6 text-center">
                        <button type="submit"
                            class="rounded-md  px-3 py-2 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <img src="/images/registrasi/submit.png" class="h-20" />
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</section>

@push('scripts')
    @include('partials.notification')
    <script></script>
@endpush
