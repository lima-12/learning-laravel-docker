<h1>Nova Dúvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{route('supports.store')}}" method="post">
    @csrf

    <div>
        <label for="subject">Assunto</label>
        <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
    </div>
    <br>
    <div>
        <textarea name="body" cols="30" rows="5" placeholder="Descrição"> {{old("body")}} </textarea>
    </div>
    <br>
    <button type="submit">Enviar</button>
    <button> <a href="{{route('supports.index')}}">Voltar</a></button>
</form>

