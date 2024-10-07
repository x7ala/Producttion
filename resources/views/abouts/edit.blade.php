<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hakkımızda Düzenle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >
                
            {{ @csrf_field() }}
            @method('PUT') 
            <form method="POST" action="{{ url('update-abouts/'.$abouts->id) }}">
            <input type="hidden" name="_token" value="oA7KHCawU4mfWSUOiJQXa3cZhWPPdRmDHSRazAJO" autocomplete="off">
                 <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Açıklama</label>
                        <textarea name="content" class="form-control" required >{{$abouts->prg}}</textarea>
                    </div>


            

          
            <div class="flex items-center justify-end mt-4">
                                   
                
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ms-4">
    Kaydet
</button>
            </div>
        </form>



            </div>
        </div>
    </div>
</x-app-layout>
