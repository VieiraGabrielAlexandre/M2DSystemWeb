<template>
    <div class="flex flex-wrap py-2">
        <div class="w-full px-4">
            <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-indigo-500 rounded">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                    <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="#pablo">
                            indigo Menu
                        </a>
                        <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                            <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                            <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                            <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                        </button>
                    </div>
                    <div class="flex lg:flex-grow items-center" id="example-navbar-info">
                        <ul class="flex flex-col lg:flex-row list-none ml-auto">
                            <li class="nav-item">
                                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                                    Discover
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    </x-jet-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        logout() {
            $.ajax({
                type:"post",
                url:"/logout",
                success: function(data) {
                    console.log("saida",JSON.stringify(data));
                },
                dataType: 'application/json',
            });
        }
    }
}
</script>
