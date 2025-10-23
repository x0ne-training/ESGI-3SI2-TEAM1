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
                        'gradient-custom': 'linear-gradient(135deg, #0a0a0a 0%,rgb(8, 6, 8) 30%,rgb(15, 3, 15) 70%, #000000 100%)',
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
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .glass-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, 
                rgba(188, 111, 241, 0.1) 0%, 
                rgba(137, 44, 220, 0.1) 50%, 
                rgba(82, 5, 123, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        
        .glass-effect:hover::before {
            opacity: 1;
        }
        
        .liquid-glass {
            backdrop-filter: blur(25px) saturate(180%);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .gradient-orb {
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, 
                rgba(188, 111, 241, 0.15) 0%, 
                rgba(137, 44, 220, 0.1) 50%, 
                rgba(82, 5, 123, 0.05) 100%);
            filter: blur(40px);
            pointer-events: none;
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .gradient-orb-2 {
            position: fixed;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, 
                rgba(137, 44, 220, 0.2) 0%, 
                rgba(188, 111, 241, 0.1) 50%, 
                rgba(82, 5, 123, 0.05) 100%);
            filter: blur(30px);
            pointer-events: none;
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .pulse-glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }
        
        @keyframes pulseGlow {
            0%, 100% { 
                box-shadow: 
                    0 8px 32px rgba(0, 0, 0, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }
            50% { 
                box-shadow: 
                    0 8px 32px rgba(188, 111, 241, 0.2),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3),
                    0 0 20px rgba(188, 111, 241, 0.3);
            }
        }
        
        .glass-shimmer {
            position: relative;
            overflow: hidden;
        }
        
        .glass-shimmer::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.2), 
                transparent);
            transition: left 0.5s ease;
        }
        
        .glass-shimmer:hover::after {
            left: 100%;
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen text-white font-sans">
    <!-- Orbes de dégradé animés -->
    <div class="gradient-orb" id="gradient-orb-1"></div>
    <div class="gradient-orb-2" id="gradient-orb-2"></div>
    
    <div class="max-w-6xl mx-auto px-5 py-8">
        <!-- Header avec navigation -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Mon Profil</h1>
                <p class="text-custom-purple-light opacity-90">Gérez vos informations personnelles</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('app') }}" class="bg-white/10 px-4 py-2 rounded-xl border border-custom-purple-light/30 hover:bg-custom-purple-light/20 transition-all duration-300">
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
                <div class="liquid-glass glass-shimmer pulse-glow rounded-3xl p-8 shadow-2xl mb-8">
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

                         <div class="flex justify-center">
                             <div class="relative group">
                                 <div
                                     class="relative w-80 h-16 opacity-90 overflow-hidden rounded-xl bg-custom-purple-dark z-10"
                                 >
                                     <div
                                         class="absolute z-10 -translate-x-44 group-hover:translate-x-[30rem] ease-in transistion-all duration-700 h-full w-44 bg-gradient-to-r from-custom-purple-light to-custom-purple opacity-30 -skew-x-12"
                                     ></div>
                                 
                                     <div
                                         class="absolute flex items-center justify-center text-white z-[1] opacity-90 rounded-2xl inset-0.5 bg-custom-purple-dark"
                                     >
                                         <button
                                             type="submit"
                                             class="input font-semibold text-xl h-full opacity-90 w-full px-16 py-3 rounded-xl bg-custom-purple-dark"
                                         >
                                             Sauvegarder
                                         </button>
                                     </div>
                                     <div
                                         class="absolute duration-1000 group-hover:animate-spin w-full h-[100px] bg-gradient-to-r from-custom-purple-light to-custom-purple blur-[30px]"
                                     ></div>
                                 </div>
                             </div>
                         </div>
                    </form>
                </div>

                <!-- Changement de mot de passe -->
                <div class="liquid-glass glass-shimmer pulse-glow rounded-3xl p-8 shadow-2xl">
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

                         <div class="flex justify-center">
                             <div class="relative group">
                                 <div
                                     class="relative w-80 h-16 opacity-90 overflow-hidden rounded-xl bg-custom-purple-dark z-10"
                                 >
                                     <div
                                         class="absolute z-10 -translate-x-44 group-hover:translate-x-[30rem] ease-in transistion-all duration-700 h-full w-44 bg-gradient-to-r from-custom-purple-light to-custom-purple opacity-30 -skew-x-12"
                                     ></div>
                                 
                                     <div
                                         class="absolute flex items-center justify-center text-white z-[1] opacity-90 rounded-2xl inset-0.5 bg-custom-purple-dark"
                                     >
                                         <button
                                             type="submit"
                                             class="input font-semibold text-xl h-full opacity-90 w-full px-16 py-3 rounded-xl bg-custom-purple-dark"
                                         >
                                             Mettre à jour
                                         </button>
                                     </div>
                                     <div
                                         class="absolute duration-1000 group-hover:animate-spin w-full h-[100px] bg-gradient-to-r from-custom-purple-light to-custom-purple blur-[30px]"
                                     ></div>
                                 </div>
                             </div>
                         </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar avec informations -->
            <div class="space-y-8">
                <!-- Avatar et informations de base -->
                <div class="liquid-glass glass-shimmer pulse-glow rounded-3xl p-6 shadow-2xl">
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
                <div class="liquid-glass glass-shimmer pulse-glow rounded-3xl p-6 shadow-2xl">
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
                <div class="liquid-glass glass-shimmer pulse-glow rounded-3xl p-6 shadow-2xl">
                    <h3 class="text-lg font-bold text-custom-purple-light mb-4 flex items-center gap-2">
                        <span class="text-xl">⚡</span>
                        Actions rapides
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('app') }}" class="block w-full bg-white/10 hover:bg-custom-purple-light/20 rounded-xl p-3 text-center transition-all duration-300">
                            📅 Voir le planning
                        </a>
                        <a href="{{ route('app') }}" class="block w-full bg-white/10 hover:bg-custom-purple-light/20 rounded-xl p-3 text-center transition-all duration-300">
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
            const cards = document.querySelectorAll('.liquid-glass');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
            
            // Animation des orbes de dégradé qui suivent la souris
            const orb1 = document.getElementById('gradient-orb-1');
            const orb2 = document.getElementById('gradient-orb-2');
            
            // Position initiale des orbes
            orb1.style.left = '20%';
            orb1.style.top = '30%';
            orb2.style.right = '20%';
            orb2.style.bottom = '30%';
            
            let mouseX = 0;
            let mouseY = 0;
            let orb1X = 0;
            let orb1Y = 0;
            let orb2X = 0;
            let orb2Y = 0;
            
            // Suivi de la souris
            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });
            
            // Animation fluide des orbes
            function animateOrbs() {
                // Orbe 1 suit la souris avec un décalage
                orb1X += (mouseX * 0.3 - orb1X) * 0.05;
                orb1Y += (mouseY * 0.3 - orb1Y) * 0.05;
                
                // Orbe 2 suit la souris avec un décalage inverse
                orb2X += ((window.innerWidth - mouseX) * 0.2 - orb2X) * 0.03;
                orb2Y += ((window.innerHeight - mouseY) * 0.2 - orb2Y) * 0.03;
                
                orb1.style.left = orb1X + 'px';
                orb1.style.top = orb1Y + 'px';
                orb2.style.left = orb2X + 'px';
                orb2.style.top = orb2Y + 'px';
                
                requestAnimationFrame(animateOrbs);
            }
            
            animateOrbs();
            
            // Effet de parallaxe seulement sur les cartes de la sidebar (pas les formulaires)
            const sidebarCards = document.querySelectorAll('.space-y-8 .liquid-glass');
            sidebarCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 20;
                    const rotateY = (centerX - x) / 20;
                    
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(5px)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
                });
            });
        });
    </script>
</body>
</html>
