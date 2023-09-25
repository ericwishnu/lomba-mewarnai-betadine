@extends('layouts.admin.app')
@section('header')
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            <h1 class="text-lg font-semibold leading-6 text-gray-900">Peserta</h1>
        </div>
    </header>
@endsection

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Peserta</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the registrant</p>
            </div>
            {{-- <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button"
                    class="block rounded-md bg-orange-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Add
                    user</button>
            </div> --}}
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300" id="peserta-table">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-0">
                                    Nama Ibu</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Nama Anak</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Umur Anak</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Kartu Pelajar</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Email</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Nomor Handphone</th>

                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Instagram</th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Bukti Pembelian</th>
                                </th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                    Created At</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($pesertas as $peserta)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-gray-900 sm:pl-0">
                                        {{ $peserta->mother_name }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-medium text-gray-500">
                                        {{ $peserta->kids_name }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $peserta->kids_age }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a href="{{ asset($peserta->student_id_url) }}" target="_blank">
                                            <img src="{{ asset($peserta->student_id_url) }}" class="h-20" />
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $peserta->email }}</td>

                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $peserta->phone }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $peserta->instagram }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a href="{{ asset($peserta->purchase_receipt_url) }}" target="_blank">
                                            <img
                                            src="{{ asset($peserta->purchase_receipt_url) }}" />
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $peserta->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#peserta-table').DataTable({
                "order": [
                    [8, "desc"]
                ],
                "paging": true, // Enable pagination
                "ordering": true, // Enable column sorting
                "searching": true
            });
        });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection
