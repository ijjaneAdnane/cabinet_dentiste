@extends('layout.layout')

@section('pageTitle', 'Ordonnances')
@section('content')

    <div class="card-body">
        <a href="{{ url('/ordonnance/create') }}" class="btn btn-primary" title="Add New Seances">
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
                                Medicament
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Observation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Observation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordonnances as $item)
                            <?php
                            $patient_nom = \App\Models\Patient::where('id', $item->patient_id)->first();
                            
                            ?>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $patient_nom->nom }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->medicament }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->observation }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->dateobservation }}
                                </td>

                                <td>
                                    <a href="{{ url('/ordonnance' . '/' . $item->id . '/edit') }}"
                                        title="Edit ordonnance"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"
                                                aria-hidden="true"></i></button></a>
                                    <form method="POST" action="{{ url('/ordonnance' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete ordonnance"
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
