<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistem Düzenle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>


                <form method="POST" action="{{ url('update-systems/'.$systems->id) }}">
                    {{ @csrf_field() }}

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Başlık</label>
                        <input type="text" class="form-control" name="title" required value="{{$systems->title}}">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Özet</label>
                        <textarea name="summary" class="form-control" required >{{$systems->summary}}</textarea>
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Açıklama</label>
                        <textarea name="content" id="content" class="form-control" required >{{$systems->content}}</textarea>
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Sıra</label>
                        <input type="text" class="form-control" name="sort_order" required value="{{$systems->sort_order}}">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Resim</label>
                        <input type="file" class="form-control"  name="image">
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="form-control">Kaydet</button>
                    </div>

                </form>



            </div>
        </div>
    </div>
</x-app-layout>

<script>
    ClassicEditor.create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
