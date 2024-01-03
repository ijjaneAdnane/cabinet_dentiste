@extends('layout.layout')

@section('pageTitle', 'Consultation')
@section('content')
    <div class="card-body">
        <a href="{{ url('/consultation/create') }}" class="btn btn-primary" title="Add New Seances">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
        <div class="table-responsive">
            <div class="px-4 py-2 relative overflow-x-auto shadow-md sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Patient
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Medecin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Facture
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Consultation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultations as $item)
                            <?php
                            $patient_nom = \App\Models\Patient::where('id', $item->patient_id)->first();
                            $medecin = \App\Models\Medecin::where('id', $item->medecin_id)->first();
                            $facture = \App\Models\Facture::where('id', $item->facture_id)->first();
                            
                            ?>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $patient_nom->nom }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $medecin->nom }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $facture->Prix }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->date_consultation }}
                                </td>
                                <td>
                                    <a href="{{ url('/consultation' . '/' . $item->id . '/edit') }}"
                                        title="Edit consultation"><button class="btn btn-primary btn-sm"><i
                                                class="fa fa-edit" aria-hidden="true"></i> </button></a>

                                    <form method="POST" action="{{ url('/consultation' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete consultation"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
