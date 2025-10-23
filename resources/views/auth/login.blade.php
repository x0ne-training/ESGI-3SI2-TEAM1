<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - my3SIB</title>
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
<body class="bg-gradient-custom min-h-screen text-white font-sans flex items-center justify-center">
    <div class="w-full max-w-md mx-auto px-5">
        <!-- Logo et titre -->
        <div class="text-center mb-8">
            <h1 class="text-5xl font-bold gradient-text mb-3 drop-shadow-lg">my3SIB</h1>
            <p class="text-lg text-custom-purple-light opacity-90">Connectez-vous à votre compte</p>
        </div>

        <!-- Formulaire de connexion -->
        <div class="bg-white/10 glass-effect rounded-3xl p-8 border border-custom-purple-light/30 shadow-2xl">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                
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
                           placeholder="votre@email.com"
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

                <!-- Se souvenir de moi -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" 
                               name="remember" 
                               class="w-4 h-4 text-custom-purple-light bg-white/10 border-custom-purple-light/30 rounded focus:ring-custom-purple-light focus:ring-2">
                        <span class="ml-2 text-sm text-white/80">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-sm text-custom-purple-light hover:text-custom-purple-light/80 transition-colors">
                        Mot de passe oublié ?
                    </a>
                </div>

                <!-- Bouton de connexion -->
                <button type="submit" 
                        class="w-full bg-gradient-button text-white py-3 px-6 rounded-xl font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-custom-purple-light/40 focus:outline-none focus:ring-2 focus:ring-custom-purple-light">
                    Se connecter
                </button>
            </form>

            <!-- Lien vers inscription -->
            <div class="mt-6 text-center">
                <p class="text-white/70">
                    Pas encore de compte ? 
                    <a href="{{ route('register') }}" class="text-custom-purple-light hover:text-custom-purple-light/80 font-medium transition-colors">
                        Créer un compte
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
