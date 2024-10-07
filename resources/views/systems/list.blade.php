<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistemler') }}
        </h2>

        <a class="btn btn-success" href="{{url('admin-systems/create')}}">Sistemler Ekle</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="table-responsive">
                                    <table data-sortable class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Link</th>
                                                <th>Başlık</th>
                                                <th>Ekleme Tarihi</th>
                                                <th data-sortable="false">İşlem</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($systems as $system)
                                            <tr>
                                                <td>{{$system->id}}</td>
                                                <!-- link keep or remove? -->
                                                <td>{{$system->title}}</td>
                                                <td>{{$system->image}}</td>
                                                <td>{{$system->summary}}</td>
                                                <td>{{$system->created_at}}</td>


                                                <td>

                                                <a style="float:left;margin-right:5px;" href="{{ url(Request::segment(1).'/'.Request::segment(2).'edit/'.$system->id) }}" style="color:#fff">
                                                                    <button class="btn btn-xs btn-info">
                                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                    </button>
                                                                </a>

                                                                <a style="float:left;margin-right:5px;" href="{{ url(Request::segment(1).'/'.Request::segment(2).'delete/'.$system->id) }}" style="color:#fff">
                                                                    <button class="btn btn-xs btn-danger">
                                                                        <i class="ace-icon fa fa-trash bigger-120"></i>
                                                                    </button>
                                                                </a>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>



            </div>
        </div>
    </div>
</x-app-layout>
