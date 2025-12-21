@extends('layouts.app')

@section('title', 'Portail Étudiant - Documents')

@section('content')
<body class="bg-[var(--noir)] text-[var(--blanc-casse)] min-h-screen font-sans overflow-x-hidden">

    <nav class="nav-glass p-6 shadow-2xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="glass-effect p-3 rounded-full">
                    <svg class="w-8 h-8 text-[var(--violet-clair)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13
                              C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13
                              C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13
                              C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>

                <h1 class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-[var(--violet-clair)] to-[var(--violet-vif)] bg-clip-text text-transparent">
                    Documents
                </h1>
            </div>

            <a href="{{ route('dashboard') }}"
               class="glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] text-sm hover:scale-105 opacity-70 hover:opacity-100 transition-all">
                🏠 Retour
            </a>
        </div>
    </nav>

    <section class="container mx-auto p-6 md:p-12 animate-fadeIn">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
            <div>
                <h2 class="text-3xl font-bold text-white mb-2">Ressources Pédagogiques</h2>
                <p class="text-[var(--gris-clair)]">Accédez aux cours, TD et corrections.</p>
            </div>

            <div class="relative w-full md:w-96 group">
                <input type="text" id="searchInput"
                       placeholder="Rechercher un fichier..."
                       class="search-input w-full py-3 px-5 rounded-full pl-12 transition-all">
            </div>
        </div>

        <div class="flex flex-wrap gap-3 mb-8">
            <button class="filter-btn active glass-effect px-5 py-2 rounded-full" data-filter="all">Tout</button>
            <button class="filter-btn glass-effect px-5 py-2 rounded-full" data-filter="maths">📐 Maths</button>
            <button class="filter-btn glass-effect px-5 py-2 rounded-full" data-filter="info">💻 Info</button>
            <button class="filter-btn glass-effect px-5 py-2 rounded-full" data-filter="physique">⚗️ Physique</button>
        </div>

        <div id="docsGrid"
             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            @foreach($documents as $doc)
                <div class="glass-effect glass-card rounded-2xl p-5 doc-item"
                     data-category="{{ $doc->category }}">

                    <div class="flex justify-between items-start mb-4">
                        <div class="p-3 rounded-xl bg-white/5">
                            {!! $doc->icon !!}
                        </div>

                        <span class="text-xs font-bold px-2 py-1 rounded-md {{ $doc->badge_class }}">
                            {{ strtoupper($doc->type) }}
                        </span>
                    </div>

                    <h3 class="font-bold text-lg text-white mb-1 line-clamp-1">
                        {{ $doc->title }}
                    </h3>

                    <p class="text-sm text-[var(--violet-clair)] mb-4">
                        {{ $doc->subject }}
                    </p>

                    <div class="flex justify-between items-center text-xs text-[var(--gris-clair)] border-t border-white/10 pt-3">
                        <span>{{ $doc->size }} • {{ $doc->created_at->format('d M') }}</span>

                        <a href="{{ route('documents.download', $doc->id) }}"
                           onclick="downloadFile(event)"
                           class="p-2 hover:bg-[var(--violet-vif)] rounded-full transition-colors text-white">
                            ⬇️
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

        <div id="emptyState" class="hidden text-center py-20">
            <div class="text-6xl mb-4">🔍</div>
            <h3 class="text-2xl font-bold text-white">Aucun document trouvé</h3>
            <p class="text-[var(--gris-clair)]">Essayez de modifier votre recherche.</p>
        </div>

    </section>

</body>
@endsection
