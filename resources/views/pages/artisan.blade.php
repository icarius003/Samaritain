@extends('layouts.base')

@section('content')

    <div class="flex items-center justify-between mb-6 ">
        <h1>ARTISTES PLACE</h1>
    </div>

    <div class="flex items-center justify-between mb-6 ">
       <div class="w-72 rounded-xl border border-gray-200 overflow-hidden bg-white shadow-sm">

  {{-- Image en haut --}}
  <div class="relative h-48 w-full">
    <img src="{{ asset('artiste.jpg') }}" alt="Photo artiste"
        class="w-79 h-full object-fit-contain" />
    <span class="absolute top-2 right-2 bg-orange-600 text-xs px-3 py-1 rounded-full border border-gray-200 ">
      Artiste
    </span>
  </div>

  {{-- Infos en bas --}}
  <div class="p-5">
    <div class="flex items-center justify-between mb-2">
      <h2 class="text-lg font-medium">Damso</h2>
      <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-md">Vérifié</span>
    </div>

    <p class="text-sm text-gray-500 mb-4">
      Rappeur belgo-congolais, pionnier du rap introspectif francophone.
    </p>

    <div class="border-t border-gray-100 pt-3 grid grid-cols-2 gap-2 mb-4">
      <div>
        <p class="text-xs text-gray-400">Local</p>
        <p class="text-sm font-medium">MFILOU</p>
      </div>
      <div>
        <p class="text-xs text-gray-400">Experience</p>
        <p class="text-sm font-medium">10 ans</p>
      </div>
      <div>
        <p class="text-xs text-gray-400">Spécialité</p>
        <p class="text-sm font-medium">Plombié</p>
      </div>
      <div>
        <p class="text-xs text-gray-400">Actif depuis</p>
        <p class="text-sm font-medium">2012</p>
      </div>
    </div>

    <button class="w-full text-sm border border-gray-200 rounded-lg py-2 hover:bg-gray-50 bg-orange-500">
      En savoir plus
    </button>
  </div>

</div>
    </div>

@endsection