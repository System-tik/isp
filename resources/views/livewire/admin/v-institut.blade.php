<div class="flex flex-col gap-2 px-10" 
    x-data="{
        menu_section : true
    }"
>
    <div class="flex gap-1">
        <button class="px-5 py-1 bg-gray-100 rounded-l-full" :class="{'text-blue-600':menu_section}" @click="menu_section=true">Section | Département | Option</button>
        <button class="px-5 py-1 bg-gray-100 rounded-r-full" :class="{'text-blue-600':!menu_section}" @click="menu_section=false">Système | Niveau | Semestre</button>
    </div>
    <div class="grid grid-cols-3 gap-5" x-show="menu_section">
        <livewire:admin.v-section>   {{-- ok --}}
        <livewire:admin.v-departement> {{-- Pas finit --}}
        <livewire:admin.v-option> {{-- Pas finit --}}
    </div>
    <div class="grid grid-cols-3 gap-5"  x-show="!menu_section">
        <livewire:admin.v-systeme> {{-- ok --}}
        <livewire:admin.v-niveau> {{-- Pas finit --}}
        <livewire:admin.v-semestre> {{-- Pas finit --}}
    </div>
</div>
