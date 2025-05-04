<x-visitor-layout>
    <x-slot name="greeting">
        <h1 class="text-7xl font-bold">Bem vindo.</h1>
        <p class="text-lg py-10">Ainda não tem uma conta?</p>
        <a class="text-lg border-b-2 pb-1 px-2 font-bold" href="{{url('register')}}">Cadastre-se</a>
    </x-slot>
    <div>
        <x-application-logo :width="208" :height="36" />
        <div class="mt-7">
            <x-input icon="fa-user-circle" placeholder="Nome de usuário ou email" />
        </div>
        <div class="mt-7">
            <x-input icon="fa-lock" placeholder="Senha"/>
        </div>
        <div class="mt-7">
            <button class="bg-[#1B2845] text-white rounded-[5px] w-full py-2" type="submit">Entrar</button>
        </div>
        <div class="mt-7 text-center text-[#555555]">
            <a href="#">Esqueci minha senha</a>
        </div>
    </div>
</x-visitor-layout>