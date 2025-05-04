<x-visitor-layout>
    <x-slot name="greeting">
        <h1 class="text-[64px] font-bold">Olá,</h1>
        <p class="py-10">Preencha os campos ao lado para criar o seu cadastro.</p>
    </x-slot>
    <div>
        Tela de Cadastro
    </div>
    <div>
        <a href="{{url('login')}}">Voltar para a tela de login</a>
    </div>
</x-visitor-layout>