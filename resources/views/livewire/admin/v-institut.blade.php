<div class="flex flex-col gap-2 px-10" 
    x-data="{
        menu_section : 0
    }"
>
    <div class="flex gap-1">
        <button class="px-5 py-1 bg-gray-100 rounded-l-full" :class="{'text-blue-600':menu_section==0}" @click="menu_section=0">Section | Département | Option</button>
        <button class="px-5 py-1 bg-gray-100" :class="{'text-blue-600':menu_section ==1}" @click="menu_section=1">Système | Niveau | Semestre</button>
        <button class="px-5 py-1 bg-gray-100 rounded-r-full" :class="{'text-blue-600':menu_section ==2}" @click="menu_section=2">Contacts</button>
    </div>
    <div class="grid grid-cols-3 gap-5" x-show="menu_section==0">
        <livewire:admin.v-section>   {{-- ok --}}
        <livewire:admin.v-departement> {{-- Pas finit --}}
        <livewire:admin.v-option> {{-- Pas finit --}}
    </div>
    <div class="grid grid-cols-3 gap-5"  x-show="menu_section==1">
        <livewire:admin.v-systeme> {{-- ok --}}
        <livewire:admin.v-niveau> {{-- Pas finit --}}
        <livewire:admin.v-semestre> {{-- Pas finit --}}
    </div>
    <div class="grid grid-cols-3 gap-5"  x-show="menu_section==2">
        <livewire:admin.v-contact> {{-- ok --}}
    </div>
</div>
