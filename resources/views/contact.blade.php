<x-layout_home>
    <div class="flex items-center justify-center mt-16 mb-52 p-5">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[450px]">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="mb-2">
                    <label
                        for="name"
                        class="mb-2 block text-base font-medium text-[#07074D]"
                    >
                        Nome
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Nome Completo"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                <div class="mb-3">
                    <label
                        for="email"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                <div class="mb-3">
                    <label
                        for="subject"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Assunto
                    </label>
                    <input
                        type="text"
                        name="subject"
                        id="subject"
                        placeholder="Assunto"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                <div class="mb-6">
                    <label
                        for="message"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Menssagem
                    </label>
                    <textarea
                        rows="4"
                        name="message"
                        id="message"
                        placeholder="Digite sua mensagem"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    ></textarea>
                </div>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#eb5d1e] py-3 px-8 text-base font-semibold text-white outline-none"
                    >
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <hr>
</x-layout_home>
