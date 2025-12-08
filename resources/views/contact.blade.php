<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact - my3SIB</title>

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
                        'gradient-custom': 'linear-gradient(135deg, #0a0a0a 0%, 8 6 8 30%, 15 3 15 70%, #000000 100%)',
                    }
                }
            }
        }
    </script>

    <style>
        .glass-card {
            backdrop-filter: blur(18px);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        }

        .gradient-text {
            background: linear-gradient(45deg, #BC6FF1, #892CDC);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen text-white">

    <div class="max-w-4xl mx-auto px-5 py-10">

        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Formulaire de contact</h1>
                <p class="text-custom-purple-light opacity-80">Sélectionnez le destinataire et décrivez votre demande.</p>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('app') }}"
                   class="bg-white/10 px-4 py-2 rounded-xl border border-custom-purple-light/30 
                   hover:bg-custom-purple-light/20 transition-all duration-300">
                    🏠 Accueil
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                            class="bg-red-500/20 px-4 py-2 rounded-xl border border-red-500/30 
                            hover:bg-red-500/30 transition-all duration-300">
                        🚪 Déconnexion
                    </button>
                </form>
            </div>
        </header>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl border border-green-400/40 bg-green-500/10 text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <main>
            <div class="glass-card rounded-3xl p-8 space-y-6">

                <div>
                    <h2 class="text-2xl font-semibold text-custom-purple-light mb-2">Contactez-nous</h2>
                    <p class="text-white/70">Choisissez le destinataire : personnel administratif ou webmaster pour signaler un bug.</p>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Nom complet
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl 
                                          text-white placeholder-white/60 focus:outline-none focus:ring-2 
                                          focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                   placeholder="Ex : Dupont Jeanne" required>
                            @error('name')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Email
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl 
                                          text-white placeholder-white/60 focus:outline-none focus:ring-2 
                                          focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                   placeholder="prenom.nom@email.com" required>
                            @error('email')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="category" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Destinataire
                            </label>
                            <select id="category" name="category"
                                    class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl 
                                           text-white focus:outline-none focus:ring-2 focus:ring-custom-purple-light 
                                           focus:border-transparent transition-all duration-300"
                                    required>
                                <option value="" disabled {{ old('category') ? '' : 'selected' }}>
                                    Choisissez une option
                                </option>
                                <option value="personnel" {{ old('category') === 'personnel' ? 'selected' : '' }}>
                                    Personnel administratif
                                </option>
                                <option value="webmaster" {{ old('category') === 'webmaster' ? 'selected' : '' }}>
                                    Webmaster (bug)
                                </option>
                            </select>
                            @error('category')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="file" class="block text-sm font-medium text-custom-purple-light mb-2">
                                Fichier joint (optionnel)
                            </label>
                            <input type="file" id="file" name="file" disabled
                                   class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl 
                                          text-white opacity-70 cursor-not-allowed">
                            <p class="text-xs text-white/60 mt-1">(Prévu pour une future évolution)</p>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-custom-purple-light mb-2">
                            Message
                        </label>
                        <textarea id="message" name="message" rows="5"
                                  class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl 
                                         text-white placeholder-white/60 focus:outline-none focus:ring-2 
                                         focus:ring-custom-purple-light focus:border-transparent transition-all duration-300"
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full md:w-auto bg-gradient-to-r from-custom-purple to-custom-purple-light 
                                   text-white font-semibold px-6 py-3 rounded-xl shadow-lg 
                                   hover:shadow-custom-purple-light/40 transition-all duration-300">
                        Envoyer la demande
                    </button>

                </form>

            </div>
        </main>

    </div>

</body>
</html>
