<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For You ❤️</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }

        .rotate-slow {
            animation: rotate 20s linear infinite;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
        }

        @keyframes particle-float {
            0% {
                transform: translate(0, 0);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translate(var(--tx), var(--ty));
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-black text-white overflow-x-hidden">
    <!-- Particles Background -->
    <div id="particles" class="fixed inset-0 pointer-events-none z-0"></div>

    <!-- Rotating Gradient Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-500/20 rounded-full blur-3xl rotate-slow"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-rose-500/20 rounded-full blur-3xl rotate-slow"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10">
        <!-- Header -->
        <header class="fixed top-0 left-0 right-0 p-6 md:p-8 z-50 bg-white/5 backdrop-blur-xl border-b border-white/10">
            <nav class="max-w-6xl mx-auto flex justify-between items-center">
                <div class="text-2xl font-bold">❤️</div>
                <div class="hidden md:flex gap-8 text-sm">
                    <a href="#home" class="hover:text-red-300 transition-colors duration-300">Home</a>
                    <a href="#about" class="hover:text-red-300 transition-colors duration-300">About</a>
                    <a href="#memories" class="hover:text-red-300 transition-colors duration-300">Memories</a>
                    <a href="#reasons" class="hover:text-red-300 transition-colors duration-300">Reasons</a>
                    <a href="#timeline" class="hover:text-red-300 transition-colors duration-300">Timeline</a>
                    <a href="#gallery" class="hover:text-red-300 transition-colors duration-300">Gallery</a>
                </div>
                <button
                    class="bg-white/5 backdrop-blur-xl border border-white/10 px-6 py-2 rounded-full text-sm hover:bg-white/10 transition-all duration-300">
                    Say Hi
                </button>
            </nav>
        </header>

        <!-- Section 1: Hero -->
        <section id="home" class="min-h-screen flex items-center justify-center px-6 py-32">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-8 fade-in-up float">
                    <div class="inline-block text-8xl md:text-9xl">💌</div>
                </div>

                <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in-up bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent"
                    style="animation-delay: 0.2s;">
                    Every Moment
                </h1>
                <h2 class="text-4xl md:text-6xl font-bold mb-8 fade-in-up text-white/90" style="animation-delay: 0.3s;">
                    With You Matters
                </h2>

                <p class="text-lg md:text-xl text-white/60 max-w-2xl mx-auto mb-12 leading-relaxed fade-in-up"
                    style="animation-delay: 0.4s;">
                    Kamu adalah alasan kenapa aku bisa percaya lagi sama cinta, simple page ini isinya cerita kita. so,
                    nikmatin aja yaa.
                </p>

                <!-- Countdown Card -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 md:p-12 max-w-2xl mx-auto mb-12 fade-in-up shadow-[0_0_40px_rgba(254,202,202,0.3)]"
                    style="animation-delay: 0.5s;">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                            <div id="days"
                                class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent mb-2">
                                00</div>
                            <div class="text-xs md:text-sm text-white/50">Days</div>
                        </div>
                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                            <div id="hours"
                                class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent mb-2">
                                00</div>
                            <div class="text-xs md:text-sm text-white/50">Hours</div>
                        </div>
                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                            <div id="minutes"
                                class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent mb-2">
                                00</div>
                            <div class="text-xs md:text-sm text-white/50">Minutes</div>
                        </div>
                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                            <div id="seconds"
                                class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent mb-2">
                                00</div>
                            <div class="text-xs md:text-sm text-white/50">Seconds</div>
                        </div>
                    </div>
                    <div class="text-white/70 text-sm">The day we got to know each other • Apr 06, 2025</div>
                </div>
            </div>
        </section>

        <!-- Section 2: About Us -->
        <section id="about" class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        About Us</h2>
                    <p class="text-white/60">Cerita tentang kita berdua</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 hover:bg-white/10 transition-all duration-500">
                        <div class="text-6xl mb-6">👫</div>
                        <h3 class="text-3xl font-bold mb-4">Our Story</h3>
                        <p class="text-white/70 leading-relaxed mb-6">
                            Pertemuan kita mungkin bukan kebetulan, gabut aja ngechat kamu di ig gitu, ya biasa aku kan
                            orangnya sok asik, tau taunya malah dapet beneran (sama-sama ketempelan banget lagi).
                        </p>
                        <p class="text-white/70 leading-relaxed">
                            Renata Geta Gaharani, cewe yang first time ngasih effortnya gila gilaan, cegil jawa nih emang agak laen ya. jadi
                            ntah gimanapun caranya, effort yang dia keluarin harus seimbang sama effort yang aku kasih
                            ke dia.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div
                            class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-4xl">💕</div>
                                <h4 class="text-xl font-bold">Commitment</h4>
                            </div>
                            <p class="text-white/60 text-sm">gausah alay segala bermuka dua, liburan ya ketemu.</p>
                        </div>

                        <div
                            class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-4xl">🌟</div>
                                <h4 class="text-xl font-bold">Trust</h4>
                            </div>
                            <p class="text-white/60 text-sm">saling percaya aja, gausah betingkah.</p>
                        </div>

                        <div
                            class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-4xl">🎯</div>
                                <h4 class="text-xl font-bold">Goals</h4>
                            </div>
                            <p class="text-white/60 text-sm">Nyenenengin kita sendiri & Nyenenengin orang lain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Memories -->
        <section id="memories" class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-6xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Sweet Memories</h2>
                    <p class="text-white/60">Momen-momen berharga yang tak terlupakan</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="h-64 bg-gradient-to-br from-red-500/20 to-rose-500/20 flex items-center justify-center text-8xl group-hover:scale-110 transition-transform duration-500">
                            🌅
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">First Date</h3>
                            <p class="text-white/60 text-sm">Hari pertama yang mengubah segalanya</p>
                        </div>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="h-64 bg-gradient-to-br from-rose-500/20 to-pink-500/20 flex items-center justify-center text-8xl group-hover:scale-110 transition-transform duration-500">
                            🎂
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Birthday Surprise</h3>
                            <p class="text-white/60 text-sm">Kejutan yang tak pernah terlupakan</p>
                        </div>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="h-64 bg-gradient-to-br from-pink-500/20 to-red-500/20 flex items-center justify-center text-8xl group-hover:scale-110 transition-transform duration-500">
                            ✈️
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Our Adventure</h3>
                            <p class="text-white/60 text-sm">Petualangan yang penuh kenangan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Reasons Why I Love You -->
        <section id="reasons" class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-6xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Why I Love You</h2>
                    <p class="text-white/60">Alasan kenapa aku jatuh cinta padamu</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">✨</div>
                        <h3 class="text-xl font-bold mb-3">Your Smile</h3>
                        <p class="text-white/60 text-sm leading-relaxed">Senyummu? cukup buat recharge lelah hari ini.
                        </p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">🌙</div>
                        <h3 class="text-xl font-bold mb-3">Your Presence</h3>
                        <p class="text-white/60 text-sm leading-relaxed">Kalo gada kamu ya gada yang tengil, gada yang
                            nanyain kabar, gada yang diajak cerita, ya semua hal yang butuh esensimu bakal gabisa jalan
                            kalo gada kamu.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">💫</div>
                        <h3 class="text-xl font-bold mb-3">Your Soul</h3>
                        <p class="text-white/60 text-sm leading-relaxed">Jadi lebih baik tiap hari, karena 1 orang itu
                            dampak yang hebat.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">💖</div>
                        <h3 class="text-xl font-bold mb-3">Your Laugh</h3>
                        <p class="text-white/60 text-sm leading-relaxed">ketawamu nyenengin banget yaa, kaya ada
                            support-supportnya gitu.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">🌸</div>
                        <h3 class="text-xl font-bold mb-3">Your Care</h3>
                        <p class="text-white/60 text-sm leading-relaxed">Top 1 orang yang paling peduli, aku salah kamu
                            marahin, aku bener kamu tenangin. intinya A1 banget.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold mb-3">Your Support</h3>
                        <p class="text-white/60 text-sm leading-relaxed">Hobby apapun selagi positif, pekerjaan apapun
                            kamu orang yang jadi no 1 buat semangatin terus.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Timeline -->
        <section id="timeline" class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-4xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Our Journey</h2>
                    <p class="text-white/60">Perjalanan cinta kita dari awal</p>
                </div>

                <div class="space-y-12 relative">
                    <div
                        class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-transparent via-white/20 to-transparent hidden md:block">
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1 text-right">
                            <div
                                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
                                <div class="text-sm text-white/50 mb-2">April 2025</div>
                                <h3 class="text-xl font-bold mb-2">First Know</h3>
                                <p class="text-white/60 text-sm">Sok asik dulu, ntar juga jadi</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black flex items-center justify-center text-2xl relative z-10">
                            💝</div>
                        <div class="flex-1 hidden md:block"></div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1 hidden md:block"></div>
                        <div
                            class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black flex items-center justify-center text-2xl relative z-10">
                            💕</div>
                        <div class="flex-1 md:text-left">
                            <div
                                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
                                <div class="text-sm text-white/50 mb-2">January 2026</div>
                                <h3 class="text-xl font-bold mb-2">First Date</h3>
                                <p class="text-white/60 text-sm">Tiba tiba banget face to face</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1 text-right">
                            <div
                                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
                                <div class="text-sm text-white/50 mb-2">June 2024</div>
                                <h3 class="text-xl font-bold mb-2">Official Together</h3>
                                <p class="text-white/60 text-sm">Hari dimana kita resmi menjadi satu</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black flex items-center justify-center text-2xl relative z-10">
                            💖</div>
                        <div class="flex-1 hidden md:block"></div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1 hidden md:block"></div>
                        <div
                            class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black flex items-center justify-center text-2xl relative z-10">
                            🌟</div>
                        <div class="flex-1 md:text-left">
                            <div
                                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
                                <div class="text-sm text-white/50 mb-2">December 2024</div>
                                <h3 class="text-xl font-bold mb-2">Anniversary</h3>
                                <p class="text-white/60 text-sm">Merayakan 6 bulan penuh kebahagiaan bersama</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1 text-right">
                            <div
                                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
                                <div class="text-sm text-white/50 mb-2">April 2025</div>
                                <h3 class="text-xl font-bold mb-2">Forever After</h3>
                                <p class="text-white/60 text-sm">Masa depan yang menanti kita berdua</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black flex items-center justify-center text-2xl relative z-10">
                            ♾️</div>
                        <div class="flex-1 hidden md:block"></div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Section 6: Gallery -->
        <section id="gallery" class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-6xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Our Gallery</h2>
                    <p class="text-white/60">Koleksi momen bahagia kita</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-red-500/20 to-rose-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            📸</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-rose-500/20 to-pink-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            🌺</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-pink-500/20 to-red-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            🎈</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-red-500/20 to-rose-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            🌹</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500 md:col-span-2">
                        <div
                            class="w-full h-full bg-gradient-to-br from-rose-500/20 to-pink-500/20 flex items-center justify-center text-8xl group-hover:scale-110 transition-transform duration-500">
                            💑</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-pink-500/20 to-red-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            🎁</div>
                    </div>
                    <div
                        class="aspect-square bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
                        <div
                            class="w-full h-full bg-gradient-to-br from-red-500/20 to-rose-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
                            🌟</div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <button
                        class="bg-white/5 backdrop-blur-xl border border-white/10 px-8 py-3 rounded-full hover:bg-white/10 transition-all duration-300 text-sm">
                        View All Photos
                    </button>
                </div>
            </div>
        </section>

        <!-- Section 7: Love Letter -->
        <section class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-3xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        A Letter For You</h2>
                    <p class="text-white/60">Sebuah pesan dari lubuk hatiku</p>
                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 md:p-12">
                    <div class="text-6xl mb-8 text-center">💌</div>
                    <div class="space-y-6 text-white/80 leading-relaxed">
                        <p>Sayang,</p>
                        <p> kalau kamu bosan, inget bagaimana serunya kenalan diawal, kalo kamu mau bohong ingat kita udah saling percaya,
                            kalo kamu tertarik sama orang lain diluar sana, ingat kita juga punya banyak pilihan.
                            hubungan itu sebuah perjalanan, maka jalani hubungan dengan baik, kalo ngerasa capek coba
                            evaluasi dan perbaiki bareng bukan mencari pengganti jangan kalah sama ego.</p>
                        <p> Makasih udah jadi alasan aku buat bangun setiap pagi dengan semangat. Makasih
                            sudah menerima aku apa adanya, dengan segala kelebihan dan kekuranganku. Kamu buat aku
                            pengen jadi versi terbaik dari diriku.</p>
                        <p> Aku janji akan selalu usaha buat kamu bahagia, lindungi kamu, dan jadi tempat
                            ternyaman buat kamu pulang. Sama kamu, aku nemuin arti dari bahagia yang
                            sesungguhnya.</p>
                        <p>Aku mencintaimu, kemarin, hari ini, dan selamanya.</p>
                        <p class="text-right italic mt-8">With Loved, <br />Orang yang paling beruntung milikin kamu
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Quotes Carousel -->
        <section class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-4xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Love Quotes</h2>
                    <p class="text-white/60">Kata-kata</p>
                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 md:p-16 text-center">
                    <div class="mb-8 text-7xl">💭</div>
                    <blockquote id="quote-text"
                        class="text-2xl md:text-3xl text-white/90 italic mb-8 min-h-32 flex items-center justify-center">
                        "Jatuh cinta itu menyenangkan, apalagi kalau kamu orangnya."
                    </blockquote>
                    <div class="flex justify-center gap-2 mb-8">
                        <span class="w-2 h-2 rounded-full bg-white/50 cursor-pointer hover:bg-white transition-colors"
                            data-quote="0"></span>
                        <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors"
                            data-quote="1"></span>
                        <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors"
                            data-quote="2"></span>
                        <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors"
                            data-quote="3"></span>
                    </div>
                    <button id="next-quote"
                        class="bg-white/10 border border-white/20 px-6 py-3 rounded-full hover:bg-white/20 transition-all duration-300">
                        Next Quote →
                    </button>
                </div>
            </div>
        </section>

        <!-- Section 9: Music Player -->
        <section class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-4xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        Our Song
                    </h2>
                    <p class="text-white/60">Lagu yang selalu mengingatkanku padamu</p>
                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 text-center">
                    <div class="mb-8 text-8xl">🎵</div>
                    <h3 id="songTitle" class="text-3xl font-bold mb-2 text-white">Memuat...</h3>
                    <p id="songArtist" class="text-white/60 mb-8">-</p>

                    <div class="bg-white/5 rounded-full h-3 mb-4 overflow-hidden cursor-pointer"
                        id="progressContainer">
                        <div id="progressBar"
                            class="bg-gradient-to-r from-red-500 to-rose-500 h-full w-0 rounded-full"></div>
                    </div>

                    <div class="flex justify-between text-white/50 text-sm mb-8">
                        <span id="currentTime">0:00</span>
                        <span id="duration">0:00</span>
                    </div>

                    <div class="flex justify-center items-center gap-6 mb-6">
                        <button id="prevSongBtn"
                            class="w-14 h-14 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-all text-2xl">
                            ⏮
                        </button>
                        <button id="playBtn"
                            class="w-20 h-20 flex items-center justify-center bg-gradient-to-r from-dark-500 to-rose-500 rounded-full hover:scale-110 transition-all text-4xl shadow-xl">
                            ▶
                        </button>
                        <button id="nextSongBtn"
                            class="w-14 h-14 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition-all text-2xl">
                            ⏭
                        </button>
                    </div>

                    <div class="flex items-center justify-center gap-3 mb-4">
                        <span class="text-xl">🔊</span>
                        <input type="range" id="volume" min="0" max="100" value="80"
                            class="w-40 h-2 bg-white/20 rounded-full">
                        <span id="volumeValue" class="text-white/50 text-sm w-10">80%</span>
                    </div>

                    <div id="status" class="mt-6 text-white/40 text-sm">Klik tombol play untuk mulai</div>
                </div>
            </div>
        </section>

        <audio id="audio"></audio>

        <!-- Section 10: Promise Cards -->
        <section class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-6xl mx-auto w-full">
                <div class="text-center mb-16">
                    <h2
                        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                        My Promises</h2>
                    <p class="text-white/60">Janji-janji yang akan selalu aku tepati</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 group">
                        <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-300">🤝</div>
                        <h3 class="text-2xl font-bold mb-3">Always Be There</h3>
                        <p class="text-white/70 leading-relaxed">Aku janji bakal selalu ada buat kamu gimanapun keadaannya. Apapun yang terjadi, kamu ga akan pernah sendiri.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 group">
                        <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-300">💪</div>
                        <h3 class="text-2xl font-bold mb-3">Support Your Dreams</h3>
                        <p class="text-white/70 leading-relaxed">Mimpimu 11/12 sama mimpiku, wujudin bareng bareng bukan hal yang rumit.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 group">
                        <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-300">😊</div>
                        <h3 class="text-2xl font-bold mb-3">Make You Smile</h3>
                        <p class="text-white/70 leading-relaxed">sedikit senyummu bernilai bangett buat aku.</p>
                    </div>

                    <div
                        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 group">
                        <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-300">🌱</div>
                        <h3 class="text-2xl font-bold mb-3">Grow Together</h3>
                        <p class="text-white/70 leading-relaxed">Tumbuh lebih baik, gini gini aja tapi berkembang lebih dari hari kemarin bareng bareng.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 11: Final CTA -->
        <section class="min-h-screen flex items-center justify-center px-6 py-20">
            <div class="max-w-4xl mx-auto w-full text-center">
                <div class="mb-12 float">
                    <div class="text-9xl">💝</div>
                </div>

                <h2
                    class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                    Will You Be Mine?
                </h2>

                <p class="text-xl md:text-2xl text-white/70 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Sedikit momen bareng kamu banyak mulihin energy buat aku.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button
                        class="bg-gradient-to-r from-red-500 to-rose-500 text-white font-bold px-12 py-5 rounded-full hover:scale-105 transition-all duration-300 shadow-2xl text-lg">
                        Yes, Forever! 💕
                    </button>
                    <button
                        class="bg-white/10 border border-white/20 text-white font-semibold px-12 py-5 rounded-full hover:bg-white/20 transition-all duration-300 text-lg">
                        Maybe Later 😊
                    </button>
                </div>

                <p class="text-white/40 text-sm mt-12">Just kidding, kamu udah tau jawabannya 😉</p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-20 px-6 border-t border-white/10">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">❤️ For You</h3>
                        <p class="text-white/60 text-sm">Made with infinite love and devotion for someone who means the
                            world to me, renata.</p>
                    </div>

                    <div>
                        <h4 class="font-bold mb-4">Quick Links</h4>
                        <div class="space-y-2 text-sm">
                            <a href="#home" class="block text-white/60 hover:text-white transition-colors">Home</a>
                            <a href="#about" class="block text-white/60 hover:text-white transition-colors">About
                                Us</a>
                            <a href="#memories"
                                class="block text-white/60 hover:text-white transition-colors">Memories</a>
                            <a href="#timeline"
                                class="block text-white/60 hover:text-white transition-colors">Timeline</a>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-bold mb-4">Connect</h4>
                        <div class="flex gap-4">
                            <button
                                class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                                💬
                            </button>
                            <button
                                class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                                📱
                            </button>
                            <button
                                class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                                📧
                            </button>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-8 border-t border-white/10">
                    <p class="text-white/40 text-sm">© 2025 Made with Love. Forever Yours.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const songs = [{
                title: "Lihat Kebunku",
                artist: "Jeje",
                url: "music/lihat-kebunku.mp3"
            },
            {
                title: "Kita Usahakan Rumah Itu",
                artist: "Sal Priadi",
                url: "music/kita-usahakan-rumah-itu.mp3"
            },
            {
                title: "33x",
                artist: "Perunggu",
                url: "music/33x.mp3"
            }
        ];

        let currentIndex = 0;
        const audio = document.getElementById('audio');
        const playBtn = document.getElementById('playBtn');
        const prevSongBtn = document.getElementById('prevSongBtn');
        const nextSongBtn = document.getElementById('nextSongBtn');
        const progressBar = document.getElementById('progressBar');
        const progressContainer = document.getElementById('progressContainer');
        const currentTime = document.getElementById('currentTime');
        const duration = document.getElementById('duration');
        const songTitle = document.getElementById('songTitle');
        const songArtist = document.getElementById('songArtist');
        const volume = document.getElementById('volume');
        const volumeValue = document.getElementById('volumeValue');
        const status = document.getElementById('status');

        // Load song
        function loadSong(index) {
            currentIndex = index;
            const song = songs[index];
            audio.src = song.url;
            songTitle.textContent = song.title;
            songArtist.textContent = song.artist;
            status.textContent = 'Memuat lagu...';
        }

        // Play/Pause
        function togglePlay() {
            if (audio.paused) {
                audio.play().then(() => {
                    status.textContent = '♫ Sedang diputar';
                }).catch(err => {
                    status.textContent = '⚠ Error: ' + err.message;
                    console.error(err);
                });
            } else {
                audio.pause();
            }
        }

        // Previous
        function prevSong() {
            currentIndex = (currentIndex - 1 + songs.length) % songs.length;
            loadSong(currentIndex);
            if (!audio.paused) {
                audio.play();
            }
        }

        // Next
        function nextSong() {
            currentIndex = (currentIndex + 1) % songs.length;
            loadSong(currentIndex);
            if (!audio.paused) {
                audio.play();
            }
        }

        // Format time
        function formatTime(sec) {
            if (isNaN(sec)) return '0:00';
            const m = Math.floor(sec / 60);
            const s = Math.floor(sec % 60);
            return `${m}:${s < 10 ? '0' : ''}${s}`;
        }

        // Update UI when playing
        audio.addEventListener('play', () => {
            playBtn.textContent = '⏸';
            status.textContent = '♫ Sedang diputar';
        });

        // Update UI when paused
        audio.addEventListener('pause', () => {
            playBtn.textContent = '▶';
            status.textContent = 'Dijeda';
        });

        // Update progress
        audio.addEventListener('timeupdate', () => {
            if (audio.duration) {
                const percent = (audio.currentTime / audio.duration) * 100;
                progressBar.style.width = percent + '%';
                currentTime.textContent = formatTime(audio.currentTime);
            }
        });

        // When metadata loaded
        audio.addEventListener('loadedmetadata', () => {
            duration.textContent = formatTime(audio.duration);
            status.textContent = 'Siap diputar ✓';
        });

        // When song ends
        audio.addEventListener('ended', () => {
            nextSong();
        });

        // Error handling
        audio.addEventListener('error', (e) => {
            status.textContent = '⚠ Tidak dapat memuat audio';
            console.error('Audio error:', e);
        });

        // Click handlers
        playBtn.onclick = togglePlay;
        prevSongBtn.onclick = prevSong;
        nextSongBtn.onclick = nextSong;

        // Seek
        progressContainer.onclick = (e) => {
            const rect = progressContainer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const percent = x / rect.width;
            audio.currentTime = percent * audio.duration;
        };

        // Volume
        volume.oninput = (e) => {
            const val = e.target.value;
            audio.volume = val / 100;
            volumeValue.textContent = val + '%';
        };

        // Space to play/pause
        document.addEventListener('keydown', (e) => {
            if (e.code === 'Space' && e.target === document.body) {
                e.preventDefault();
                togglePlay();
            }
        });

        // Initialize
        audio.volume = 0.8;
        loadSong(0);
        // Particles Effect
        function createParticle() {
            const container = document.getElementById('particles');
            const particle = document.createElement('div');
            particle.className = 'particle';

            const startX = Math.random() * window.innerWidth;
            const startY = Math.random() * window.innerHeight;
            const endX = (Math.random() - 0.5) * 200;
            const endY = (Math.random() - 0.5) * 200;

            particle.style.left = startX + 'px';
            particle.style.top = startY + 'px';
            particle.style.setProperty('--tx', endX + 'px');
            particle.style.setProperty('--ty', endY + 'px');
            particle.style.animation = 'particle-float 3s ease-out forwards';

            container.appendChild(particle);

            setTimeout(() => particle.remove(), 3000);
        }

        setInterval(createParticle, 300);

        function updateRelationshipCounter() {
            // ⭐ GANTI TANGGAL INI dengan tanggal mulai hubungan Anda
            // Contoh: new Date('2024-01-15T14:30:00')
            const startDate = new Date('2025-04-06T19:31:00');
            const now = new Date();
            const diff = now - startDate;

            if (diff > 0) {
                // Hitung durasi SEJAK startDate (relationship counter)
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
            } else {
                // Jika tanggal belum tiba (countdown mode)
                const absDiff = Math.abs(diff);
                const days = Math.floor(absDiff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((absDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((absDiff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((absDiff % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
            }
        }

        setInterval(updateRelationshipCounter, 1000);
        updateRelationshipCounter();

        // Quotes Carousel
        const quotes = [
            "Jatuh cinta itu menyenangkan, apalagi kalau kamu orangnya.",
            "Kalau udah punya yang indah, jangan cari keindahan di orang lain, nanti kamu akan kehilangan, didunia ini gada yang sempurna, maka sempurnakan yang ada.",
            "karena memilih pasangan bukan soal yang terbaik, tapi yang paling cocok.",
            "Sering ngeluh ngapain aku suka sama dia, lah aku aja bingung kenapa dia mau sama aku."
        ];

        let currentQuote = 0;
        const quoteText = document.getElementById('quote-text');
        const nextBtn = document.getElementById('next-quote');
        const quoteDots = document.querySelectorAll('[data-quote]');

        function updateQuote(index) {
            currentQuote = index;
            quoteText.style.opacity = '0';

            setTimeout(() => {
                quoteText.textContent = `"${quotes[currentQuote]}"`;
                quoteText.style.opacity = '1';

                quoteDots.forEach((dot, i) => {
                    if (i === currentQuote) {
                        dot.classList.remove('bg-white/20');
                        dot.classList.add('bg-white/50');
                    } else {
                        dot.classList.remove('bg-white/50');
                        dot.classList.add('bg-white/20');
                    }
                });
            }, 300);
        }

        nextBtn.addEventListener('click', () => {
            updateQuote((currentQuote + 1) % quotes.length);
        });

        quoteDots.forEach(dot => {
            dot.addEventListener('click', () => {
                updateQuote(parseInt(dot.dataset.quote));
            });
        });

        quoteText.style.transition = 'opacity 0.3s ease-in-out';
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Mobile Menu Toggle
        const menuButton = document.querySelector('header button');
        if (menuButton) {
            menuButton.addEventListener("click", () => {
                Swal.fire({
                    title: "Welcome to DR Little World",
                    text: "Continue The page, enjoy.",
                    icon: "info",

                    width: 640,
                    padding: "2.5em",

                    color: "#111827",

                    background: `
        linear-gradient(
          rgba(255,255,255,0.92),
          rgba(255,255,255,0.92)
        ),
        url("/images/nailong.jpg") center center / cover no-repeat
      `,

                    backdrop: `
        rgba(0,0,0,0.7)
        url("/images/bg.gif") left top / 350px no-repeat
      `,

                    confirmButtonText: "Masuk",
                    confirmButtonColor: "#ef4444",

                    allowOutsideClick: false,
                    allowEscapeKey: true,

                    showClass: {
                        popup: "swal2-show swal2-fade"
                    },
                    hideClass: {
                        popup: "swal2-hide swal2-fade"
                    }
                });
            });
        }
    </script>
</body>

</html>
