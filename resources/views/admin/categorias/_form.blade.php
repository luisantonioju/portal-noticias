<div class="mb-5">
    <label for="titulo" class="form-label">Título *</label>
    <input type="text" name="titulo" id="titulo" class="form-control">

</div>
<div class="mb-5">
    <label for="resumo" class="form-label">Descrição *</label>
    <input name="resumo" id="resumo" class="form-control">
</div>
<div class="mb-5">
    <label for="conteudo" class="form-label">Cor *</label>
    <input name="conteudo" id="conteudo" class="form-control">
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
