<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">

                    <h1 class="text-[18px] font-bold">Cadastrar Categoria</h1>
                    <a href="#" class="text-slate-500 font-semibold px-4 py-2 rounded"><- Voltar para categorias</a>


                </div>

                <div class="p-6 overflow-x-auto">
                    <form action="#" method="post">


                        <div class="mb-5">
                            <label for="titulo" class="form-label">Nome *</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">

                        </div>
                        <div class="mb-5">
                            <label for="resumo" class="form-label">Descrição *</label>
                            <textarea name="resumo" id="resumo" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="conteudo" class="form-label">Cor *</label>
                            <input type="text" name="conteudo" id="conteudo" class="form-control"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="imagem" class="form-label">Imagem Capa</label>
                            <input type="file" name="imagem" id="imagem" accept="image/*" class="form-control">
                            <p>JPG e PNG no máximo 2MB</p>
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
                            <button type="submit" class="bg-slate-950 text-white px-4 py-2 rounded">Cadastrar</button>
                            <a href="{{ route('admin.noticias.index') }}"
                                class="bg-slate-200 text-slate-500 px-4 py-2 rounded inline-block">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
