<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-white">
            {{ __('Cadastros - Analisar') }}
        </h2>
    </x-slot>
        @if(session()->has('success'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if(session()->has('errors'))
            <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <p>{{ session('errors') }}</p>
            </div>
        @endif
        <div class="flex items-center w-full bg-teal-lighter">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
                <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="{{ route('atualizar.cadastro', $cadastro->id)}}" method="POST">
                    @csrf
                    <div class="flex flex-col mb-6 md:w-full">
                        <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="first_name">Nome Completo</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name" value="{{ $cadastro->nome }}">
                    </div>
                    <div class="flex flex-col mb-4 md:w-full">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email" value="{{ $cadastro->email }}">
                    </div>

                    <div class="flex flex-col mb-4 md:w-full">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="plano">Plano</label>
                        <input class="border py-2 px-3 text-grey-darkest" type="text" name="plano" id="plano" value="{{ $cadastro->plano }}">
                    </div>

                    <div class="flex flex-col mb-4 md:w-1/2">
                        <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="telefone">Telefone</label>
                        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="telefone" id="telefone" value="{{ $cadastro->telefone }}">
                    </div>
                    <div class="flex flex-col mb-4 md:w-1/2">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="telefone_2">Telefone - 2</label>
                        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="telefone_2" id="telefone_2" value="{{ $cadastro->telefone_2 }}">
                    </div>

                    <div class="flex flex-col mb-4 md:w-1/2">
                        <label class="mb-2 uppercase tracking-wide font-bold text-lg text-grey-darkest" for="cep">CEP</label>
                        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="cep" id="cep" value="{{ $cadastro->cep }}">
                    </div>
                    <div class="flex flex-col mb-4 md:w-1/2">
                        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="last_name">Bairro</label>
                        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="bairro" id="bairro" value="{{ $cadastro->bairro }}">
                    </div>

                    <div class="flex flex-col mb-4 md:w-full">
                        <label class="block mt-4">
                            <span class="text-gray-700">Situação</span>
                            <select class="form-select mt-1 block w-full" id="status" name="status">
                                <option value="1" {{ ($cadastro->status == 1) ? 'selected' : ''}}>Ativo</option>
                                <option value="0" {{ ($cadastro->status == 0) ? 'selected' : ''}}>Negativo</option>
                                <option value="2" {{ ($cadastro->status == 2) ? 'selected' : ''}}>Em analise</option>
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
