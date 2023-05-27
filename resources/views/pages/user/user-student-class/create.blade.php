<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Criar uma nova sala
        </h2>
    </x-slot>

    <x-form.container.divider
        title="Preencha os campos ao lado"
        description="Preecha todos os campos obrigatórios para criar um pelotão"
        action="user-student-class.store"
        method="POST"
        class="sm:mt-5"
        withFile
    >
        <x-form.group.input
            name="name"
            label="Nome do pelotão"
        />

        <x-form.group.textarea
            label="Descrição"
            name="description"
            smCol="sm:col-span-6"
        />

        <x-form.group.file name="photo" preview label="Selecione a foto do pelotão" />
    </x-form.container.divider>

</x-app-layout>
