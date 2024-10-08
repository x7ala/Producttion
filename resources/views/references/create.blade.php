<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Referanslarimiz Ekle') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >


            <form method="POST" action="{{ url('post-references') }}">
                {{ @csrf_field() }}

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="title">Açıklama</label>
                    <input type="text" class="form-control" name="description" required>
                </div>


                 <div class="flex items-center justify-end mt-4">

                <button type="submit" class="form-control">Kaydet</button>
            </div>
            </form>



            </div>
        </div>
    </div>
</x-app-layout>
