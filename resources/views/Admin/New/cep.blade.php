<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-white">
            {{ __('Cep - Novo') }}
        </h2>
    </x-slot>
    <div class="flex items-center w-full bg-teal-lighter">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
            <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="{{ route('salvar.cep')}}" method="POST">
                @csrf
                <div class="flex flex-col mb-6 md:w-full">
                    <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="first_name">Número</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="numero" id="numero"">
                </div>
                <div class="flex flex-col mb-4 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="bairro">Bairro</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="text" id="text">
                </div>

                <div class="flex flex-col mb-4 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="rua">Rua</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="rua" id="rua">
                </div>

                <div class="flex flex-col mb-4 md:w-1/2">
                    <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="cidade">Cidade</label>
                    <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="cidade" id="cidade">
                </div>
                <div class="flex flex-col mb-4 md:w-1/2">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="telefone_2">UF</label>
                    <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="uf" id="uf">
                </div>

                <div class="flex flex-col mb-4 md:w-full">
                    <label class="block mt-4">
                        <span class="text-gray-700">Situação</span>
                        <select class="form-select mt-1 block w-full" id="status" name="status">
                            <option value="1">Ativo</option>
                            <option value="0">Não ativa</option>
                            <option value="2">Em analise</option>
                        </select>
                    </label>
                </div>

                <button class="block bg-purple-700 hover:btn-purple-100 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Enviar</button>
            </form>
        </div>
    </div>

</x-app-layout>

<style>
    .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
    }
    .toggle-checkbox:checked + .toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
    }
</style>
