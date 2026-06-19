<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Noticias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">

                    <h1 class="text-[18px] font-bold">Lista de Noticias</h1>
                    <a href="#" class="bg-slate-950 text-white px-4 py-2 rounded"> Adicionar notícia</a>


                </div>

                <div class="p-6">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-gradient-to-r from-slate-700 to-slate-500 text-white text-right">
                                <th>ID</th>
                                <th>TÍTULO</th>
                                <th>RESUMO</th>
                                <th>CATEGORIA</th>
                                <th>PUBLICAÇÃO</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1</td>
                                <td>Título da Notícia</td>
                                <td>Resumo da notícia</td>
                                <td>Tecnologia</td>
                                <td>19/06/2026 14:10</td>
                                <td>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Editar</a>
                                    <a href="#" class="text-red-500 hover:text-red-700">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
</x-app-layout>
