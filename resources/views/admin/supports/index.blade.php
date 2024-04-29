<div style="text-align: center">
    <h1>Listagem dos suportes!</h1>

    <button>
        <a style="text-decoration: none" href="{{ route('supports.create') }}"> Nova Dúvida </a>
    </button>

    <br>
    <br>

    <table style="width: 100%;">
        <thead>
            <th style="border: 1px solid grey;">assunto</th>
            <th style="border: 1px solid grey;">status</th>
            <th style="border: 1px solid grey;">descrição</th>
            <th style="border: 1px solid grey;">ações</th>
        </thead>

        <tbody style="text-align: center">
            @foreach ( $supports as $support )
                <tr>
                    <td style="border: 1px solid grey;">{{ $support->subject }}</td>
                    <td style="border: 1px solid grey;">{{ $support->status }}</td>
                    <td style="border: 1px solid grey;">{{ $support->body }}</td>
                    <td style="border: 1px solid grey;">
                        <button> <a style="text-decoration: none" href="{{ route('supports.show', $support->id) }}"> + </a> </button>
                        <button> <a style="text-decoration: none" href="{{ route('supports.edit', $support->id) }}"> E </a> </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>