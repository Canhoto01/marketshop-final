<x-layout_base>

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="mx-auto max-w-screen-md py-12 px-4 sm:px-6 md:max-w-screen-xl md:py-20 lg:py-32 md:px-8">
        <div class="md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
            <!-- Title -->
            <h1 class="text-3xl text-yellow-800 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-yellow-200">
            Nossos produtos a um clique de você <span class=" text-yellow-400">Mercado livre</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 dark:text-neutral-500 my-10">
            Crie sua conta para poder vender, comprar e pesquisar milhares de produtos em diversas categorias diferentes.
            </p>
            <!-- End Title -->

            <!-- Form -->
            <form action="{{route('salva-usuario')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="campo-nome" class="block text-sm font-medium dark:text-white"><span class="">Nome completo</span></label>
                <input type="text" name="nome" id="campo-nome" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nome Completo">
            </div>

            <div class="mb-4">
                <label for="hs-hero-email-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Email</span></label>
                <input type="email" name="email" id="hs-hero-email-2" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Email">
            </div>

            <div class="mb-4">
                <label for="hs-hero-password-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Senha</span></label>
                <input type="password" name="senha" id="hs-hero-password-2" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Senha">
            </div>

            <div class="grid">
                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-yellow-500 disabled:opacity-50 disabled:pointer-events-none">Criar Conta</button>
            </div>
            </form>
            <!-- End Form -->
        </div>
        </div>

        <div class="hidden md:block md:absolute md:top-0 md:start-1/2 md:end-0 h-full bg-[url('https://img.odcdn.com.br/wp-content/uploads/2024/01/Mercado-Livre-Imagem-Shutterstock.jpg')] bg-no-repeat bg-center bg-cover"></div>
        <!-- End Col -->
    </div>
    <!-- End Hero -->

</x-layout_base>
