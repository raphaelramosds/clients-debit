<x-visitor-layout>
    <x-slot name="greeting">
        <h1 class="text-7xl font-bold">Olá,</h1>
        <p class="text-lg py-10 text-left">Preencha os campos ao lado para criar <br> o seu cadastro.</p>
    </x-slot>
    <div>
        <div class="mt-7">
            <x-input icon="fa-user-circle" placeholder="Nome de usuário" />
        </div>
        <div class="mt-7">
            <x-input icon="fa-envelope" placeholder="Email"/>
        </div>
        <div class="mt-7">
            <x-input icon="fa-lock" placeholder="Senha"/>
        </div>
        <div class="mt-7">
            <x-input icon="fa-lock" placeholder="Confirmar senha"/>
        </div>
        <div class="mt-7">
            <button class="bg-[#1B2845] text-white rounded-[5px] w-full py-2" type="submit">Registrar-se</button>
        </div>
    </div>
    <div class="mt-7 text-center text-[#555555]">
        <a href="{{url('login')}}">Esqueci minha senha</a>
    </div>
    <div class="mt-3 text-center text-[#555555]">
        <a href="{{url('login')}}">Voltar para a tela de login</a>
    </div>
</x-visitor-layout>