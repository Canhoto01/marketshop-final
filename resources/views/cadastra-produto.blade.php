<x-layout_base>

<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <form>
      <!-- Card -->
      <div class="bg-white rounded-xl shadow dark:bg-neutral-900">
        <div class="relative h-40 rounded-t-xl bg-[url('https://appprod-br.ingrammicro.com/portal/wp-content/uploads/2023/06/banner-cadastro.png')] bg-no-repeat bg-cover bg-center">
        </div>

        <div class="pt-0 p-4 sm:pt-0 sm:p-7">
          <!-- Grid -->
          <div class="space-y-4 sm:space-y-6">
            <div>
              <label class="sr-only">
                Product photo
              </label>

              <div class="grid sm:flex sm:items-center sm:gap-x-5">

              </div>
            </div>

            <div class="space-y-2">
              <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Nome do produto
              </label>

              <input id="af-submit-app-project-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-300 border-2 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Digite o nome do produto">
            </div>

            <div class="space-y-2">
                <label for="af-submit-app-description" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Descrição
                </label>

                <textarea id="af-submit-app-description" class="py-2 px-3 block w-full border-gray-300 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Descreva brevemente seu produto, para que seus clientes saibam o que estão comprando    "></textarea>
            </div>

            <div class="space-y-2">
                <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Preço do produto
                </label>

                <input id="af-submit-app-project-name" step="0.01" type="number" class="py-2 px-3 pe-11 block w-full border-gray-300 border-2 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Digite o preço do produto">
            </div>

            <div class="space-y-2">
              <label for="af-submit-app-upload-images" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Foto do produto
              </label>

              <label for="af-submit-app-upload-images" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-300 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                <input id="af-submit-app-upload-images" name="af-submit-app-upload-images" type="file" class="sr-only">
                <svg class="size-10 mx-auto text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg>
                <span class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                  Pesquiar no computador ou <span class="group-hover:text-blue-700 text-blue-600">arraste e solte o arquivo aqui</span>
                </span>
                <span class="mt-1 block text-xs text-gray-500 dark:text-neutral-500">
                  tamanho máximo 2mb
                </span>
              </label>
            </div>


          </div>
          <!-- End Grid -->

          <div class="mt-5 flex justify-center gap-x-2">
            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
              Salvar produto
            </button>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </form>
  </div>
  <!-- End Card Section -->

</x-layout_base>
