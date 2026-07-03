@if ($errors->any())

    <div class="mb-10 text-red-500">
        <p class="font-bold">Verifique os erros abaixo:</p>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>- {{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mb-5">
    <label for="nome" class="form-label">Nome *</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome', $categoria->nome ?? null) }}"
        class="form-control">
</div>

<div class="mb-5">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{ old('descricao', $categoria->descricao ?? '') }}"
        class="form-control">
</div>

<div class="mb-5">
    <label for="cor" class="form-label">Cor *</label>
    <input type="text" name="cor" id="cor" value="{{ old('cor', $categoria->cor ?? '') }}"
        class="form-control">
</div>

<div class="mb-5">
    <label for="situacao" class="form-label">Situação</label>
    <div id="situacao">
        <label>
            <input type="radio" name="ativo" value="1"> Publicado
        </label>
        <label>
            <input type="radio" name="ativo" value="0" checked> Rascunho
        </label>
    </div>
</div>
<div>
    <button type="submit" class="bg-slate-950 text-white px-4 py-2 rounded">Salvar</button>
    <a href="{{ route('admin.noticias.index') }}"
        class="bg-slate-200 text-slate-500 px-4 py-2 rounded inline-block">Cancelar</a>
</div>
