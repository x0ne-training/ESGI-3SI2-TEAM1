<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - my3SIB</title>
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
<body class="bg-gradient-custom min-h-screen text-white font-sans py-8">
    <div class="w-full max-w-2xl mx-auto px-5">
        <!-- Logo et titre -->
        <div class="text-center mb-8">
            <h1 class="text-5xl font-bold gradient-text mb-3 drop-shadow-lg">my3SIB</h1>
            <p class="text-lg text-custom-purple-light opacity-90">Créez votre compte</p>
        </div>

        <!-- Formulaire d'inscription -->
        <div class="bg-white/10 glass-effect rounded-3xl p-8 border border-custom-purple-light/30 shadow-2xl">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                
                <!-- Nom et Prénom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-custom-purple-light mb-2">
                            👤 Prénom
                        </label>
                        <input type="text" 
                               id="first_name" 
                               name="first_name" 
                               value="{{ old('first_name') }}"
                               class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                               placeholder="Jean"
                               required>
                        @error('first_name')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-custom-purple-light mb-2">
                            👤 Nom
                        </label>
                        <input type="text" 
                               id="last_name" 
                               name="last_name" 
                               value="{{ old('last_name') }}"
                               class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                               placeholder="Dupont"
                               required>
                        @error('last_name')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-custom-purple-light mb-2">
                        📧 Adresse email
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}"
                           class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                           placeholder="p.nom@myskolae.fr
                           required>
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="password" class="block text-sm font-medium text-custom-purple-light mb-2">
                        🔒 Mot de passe
                    </label>
                    <input type="password" 
                           id="password" 
                           name="password"
                           class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                           placeholder="••••••••"
                           required>
                    @error('password')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirmation mot de passe -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-custom-purple-light mb-2">
                        🔒 Confirmer le mot de passe
                    </label>
                    <input type="password" 
                           id="password_confirmation" 
                           name="password_confirmation"
                           class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                           placeholder="••••••••"
                           required>
                </div>

                <!-- Téléphone (optionnel) -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-custom-purple-light mb-2">
                        📱 Téléphone (optionnel)
                    </label>
                    <input type="tel" 
                           id="phone" 
                           name="phone" 
                           value="{{ old('phone') }}"
                           class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                           placeholder="06 12 34 56 78">
                    @error('phone')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Conditions d'utilisation -->
                <div class="flex items-start">
                    <input type="checkbox" 
                           id="terms" 
                           name="terms"
                           class="w-4 h-4 mt-1 text-custom-purple-light bg-white/10 border-custom-purple-light/30 rounded focus:ring-custom-purple-light focus:ring-2"
                           required>
                    <label for="terms" class="ml-2 text-sm text-white/80">
                        J'accepte les 
                        <a href="#" class="text-custom-purple-light hover:text-custom-purple-light/80 underline">conditions d'utilisation</a>
                        et la 
                        <a href="#" class="text-custom-purple-light hover:text-custom-purple-light/80 underline">politique de confidentialité</a>
                    </label>
                </div>
                @error('terms')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror

                <!-- Bouton d'inscription -->
                <button type="submit" 
                        class="w-full bg-gradient-button text-white py-3 px-6 rounded-xl font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-custom-purple-light/40 focus:outline-none focus:ring-2 focus:ring-custom-purple-light">
                    Créer mon compte
                </button>
            </form>

            <!-- Lien vers connexion -->
            <div class="mt-6 text-center">
                <p class="text-white/70">
                    Déjà un compte ? 
                    <a href="{{ route('login') }}" class="text-custom-purple-light hover:text-custom-purple-light/80 font-medium transition-colors">
                        Se connecter
                    </a>
                </p>
            </div>
        </div>

        <!-- Retour à l'accueil -->
        <div class="text-center mt-6">
            <a href="{{ route('app') }}" class="text-custom-purple-light hover:text-custom-purple-light/80 transition-colors">
                ← Retour à l'accueil
            </a>
        </div>
    </div>

    <script>
        // Animation d'entrée
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('[class*="glass-effect"]');
            form.style.opacity = '0';
            form.style.transform = 'translateY(30px)';
            setTimeout(() => {
                form.style.transition = 'all 0.6s ease';
                form.style.opacity = '1';
                form.style.transform = 'translateY(0)';
            }, 200);
        });
    </script>
</body>
</html>
