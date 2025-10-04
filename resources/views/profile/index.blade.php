<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - my3SIB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-black': '#000000',
                        'custom-purple-dark': '#52057B',
                        'custom-purple': '#892CDC',
                        'custom-purple-light': '#BC6FF1',
                    },
                    backgroundImage: {
                        'gradient-custom': 'linear-gradient(135deg, #000000 0%, #52057B 50%, #892CDC 100%)',
                        'gradient-logo': 'linear-gradient(45deg, #BC6FF1, #892CDC)',
                        'gradient-button': 'linear-gradient(45deg, #BC6FF1, #892CDC)',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #BC6FF1, #892CDC);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glass-effect {
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen text-white font-sans">
    <div class="max-w-6xl mx-auto px-5 py-8">
        <!-- Header avec navigation -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Mon Profil</h1>
                <p class="text-custom-purple-light opacity-90">Gérez vos informations personnelles</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('welcome') }}" class="bg-white/10 px-4 py-2 rounded-xl border border-custom-purple-light/30 hover:bg-custom-purple-light/20 transition-all duration-300">
                    🏠 Accueil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500/20 px-4 py-2 rounded-xl border border-red-500/30 hover:bg-red-500/30 transition-all duration-300">
                        🚪 Déconnexion
                    </button>
                </form>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Informations personnelles -->
            <div class="lg:col-span-2">
                <div class="bg-white/10 glass-effect rounded-3xl p-8 border border-custom-purple-light/30 shadow-2xl mb-8">
                    <h2 class="text-2xl font-bold text-custom-purple-light mb-6 flex items-center gap-3">
                        <span class="text-3xl">👤</span>
                        Informations personnelles
                    </h2>
                    
                    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-custom-purple-light mb-2">
                                    Prénom
                                </label>
                                <input type="text" 
                                       id="first_name" 
                                       name="first_name" 
                                       value="{{ old('first_name', $user->first_name ?? '') }}"
                                       class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300">
                                @error('first_name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm font-medium text-custom-purple-light mb-2">
                                    Nom
                                </label>
                                <input type="text" 
                                       id="last_name" 
                                       name="last_name" 
                                       value="{{ old('last_name', $user->last_name ?? '') }}"
                                       class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300">
                                @error('last_name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Adresse email
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email', $user->email ?? '') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300">
                            @error('email')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Téléphone
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone', $user->phone ?? '') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300">
                            @error('phone')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" 
                                class="bg-gradient-button text-white py-3 px-6 rounded-xl font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-custom-purple-light/40 focus:outline-none focus:ring-2 focus:ring-custom-purple-light">
                            💾 Sauvegarder les modifications
                        </button>
                    </form>
                </div>

                <!-- Changement de mot de passe -->
                <div class="bg-white/10 glass-effect rounded-3xl p-8 border border-custom-purple-light/30 shadow-2xl">
                    <h2 class="text-2xl font-bold text-custom-purple-light mb-6 flex items-center gap-3">
                        <span class="text-3xl">🔒</span>
                        Changer le mot de passe
                    </h2>
                    
                    <form method="POST" action="{{ route('profile.password') }}" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Mot de passe actuel
                            </label>
                            <input type="password" 
                                   id="current_password" 
                                   name="current_password"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                   placeholder="••••••••"
                                   required>
                            @error('current_password')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="new_password" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Nouveau mot de passe
                            </label>
                            <input type="password" 
                                   id="new_password" 
                                   name="new_password"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                   placeholder="••••••••"
                                   required>
                            @error('new_password')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="new_password_confirmation" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Confirmer le nouveau mot de passe
                            </label>
                            <input type="password" 
                                   id="new_password_confirmation" 
                                   name="new_password_confirmation"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                   placeholder="••••••••"
                                   required>
                        </div>

                        <button type="submit" 
                                class="bg-gradient-button text-white py-3 px-6 rounded-xl font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-custom-purple-light/40 focus:outline-none focus:ring-2 focus:ring-custom-purple-light">
                            🔄 Mettre à jour le mot de passe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar avec informations -->
            <div class="space-y-8">
                <!-- Avatar et informations de base -->
                <div class="bg-white/10 glass-effect rounded-3xl p-6 border border-custom-purple-light/30 shadow-2xl">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-button rounded-full mx-auto mb-4 flex items-center justify-center text-3xl">
                            {{ strtoupper(substr($user->first_name ?? 'U', 0, 1)) }}{{ strtoupper(substr($user->last_name ?? 'S', 0, 1)) }}
                        </div>
                        <h3 class="text-xl font-bold text-custom-purple-light">
                            {{ $user->first_name ?? 'Utilisateur' }} {{ $user->last_name ?? '' }}
                        </h3>
                        <p class="text-white/70 text-sm">{{ $user->email ?? '' }}</p>
                        <p class="text-white/70 text-sm">{{ $user->phone ?? 'Aucun téléphone' }}</p>
                    </div>
                </div>

                <!-- Statistiques -->
                <div class="bg-white/10 glass-effect rounded-3xl p-6 border border-custom-purple-light/30 shadow-2xl">
                    <h3 class="text-lg font-bold text-custom-purple-light mb-4 flex items-center gap-2">
                        <span class="text-xl">📊</span>
                        Statistiques
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-white/70">Membre depuis</span>
                            <span class="text-custom-purple-light font-medium">{{ $user->created_at ? $user->created_at->format('M Y') : 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-white/70">Dernière connexion</span>
                            <span class="text-custom-purple-light font-medium">{{ $user->last_login_at ? $user->last_login_at->format('d M Y') : 'Jamais' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-white/70">Notes créées</span>
                            <span class="text-custom-purple-light font-medium">{{ $user->notes_count ?? 0 }}</span>
                        </div>
                    </div>
                </div>

                <!-- Actions rapides -->
                <div class="bg-white/10 glass-effect rounded-3xl p-6 border border-custom-purple-light/30 shadow-2xl">
                    <h3 class="text-lg font-bold text-custom-purple-light mb-4 flex items-center gap-2">
                        <span class="text-xl">⚡</span>
                        Actions rapides
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('welcome') }}" class="block w-full bg-white/10 hover:bg-custom-purple-light/20 rounded-xl p-3 text-center transition-all duration-300">
                            📅 Voir le planning
                        </a>
                        <a href="{{ route('welcome') }}" class="block w-full bg-white/10 hover:bg-custom-purple-light/20 rounded-xl p-3 text-center transition-all duration-300">
                            📝 Mes notes
                        </a>
                        <button class="block w-full bg-red-500/20 hover:bg-red-500/30 rounded-xl p-3 text-center transition-all duration-300">
                            🗑️ Supprimer le compte
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animation d'entrée
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('[class*="glass-effect"]');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });
    </script>
</body>
</html>
