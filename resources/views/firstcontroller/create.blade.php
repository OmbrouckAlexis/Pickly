@extends("layouts.template")

@section('content')

<section id="create">

    <div id="title-create">
        <h2>Ajoutez une photos pour la partager avec la communauté :</h2>
        <p>Pour ajouter une photos, il suffit de remplir le formulaire ci-dessous</p>
    </div>

    <form class="form-laravel" method="post" action="/songs" enctype="multipart/form-data">
    @csrf
        <div>
            <label class="label-form">Titre :</label><br/>
            <input class="input-form" type="text" name="title"/><br/>
        </div><br/>
        <div>
            <label class="label-form">Description :</label><br/>
            <input class="textarea-form" type="text" name="description"/><br/>
        </div><br/>
        <div>
            <label class="label-form">Charger une image :</label><br/>
            <input class="btn-file" type="file" name="song"></input><br/>
        </div><br/>
        <div>
            <input class="btn-user" type="submit"></input>
        </div>
    </form>
    
</section>
@endsection