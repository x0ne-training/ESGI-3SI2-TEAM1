import React, { useEffect, useMemo, useState } from "react";

interface Slide {
    image: string;
    title: string;
    subtitle?: string;
}

const Banner: React.FC = () => {
    const slides: Slide[] = useMemo(
        () => [
            {
                image: "/banner1.jpg",
                title: "Bienvenue sur notre plateforme",
                subtitle: "Découvrez les nouveautés du moment",
            },
            {
                image: "/banner2.jpg",
                title: "Sécurité et fiabilité",
                subtitle: "Vos données sont protégées en permanence",
            },
            {
                image: "/banner3.jpg",
                title: "Support dédié",
                subtitle: "Notre équipe est là pour vous accompagner",
            },
        ],
        [],
    );

    const [currentIndex, setCurrentIndex] = useState(0);

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentIndex((prev) => (prev + 1) % slides.length);
        }, 4000);

        return () => clearInterval(interval);
    }, [slides.length]);

    return (
        <div className="relative w-full overflow-hidden rounded-2xl bg-slate-900 shadow-xl">
            <div className="relative h-64 md:h-80">
                {slides.map((slide, index) => (
                    <div
                        key={slide.title}
                        className={`absolute inset-0 flex h-full w-full items-center transition-all duration-700 ease-in-out ${
                            index === currentIndex
                                ? "translate-x-0 opacity-100"
                                : "translate-x-6 opacity-0"
                        }`}
                        style={{ backgroundImage: `url(${slide.image})` }}
                    >
                        <div className="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/20" />

                        <img
                            src={slide.image}
                            alt={slide.title}
                            className="h-full w-full object-cover"
                            loading="lazy"
                        />

                        <div className="absolute inset-0 flex flex-col justify-center px-6 text-white md:px-10">
                            <p className="mb-2 text-sm uppercase tracking-widest text-slate-200">Bannière</p>

                            <h2 className="text-2xl font-bold md:text-3xl lg:text-4xl">
                                {slide.title}
                            </h2>

                            {slide.subtitle ? (
                                <p className="mt-2 max-w-2xl text-sm md:text-base text-slate-100">
                                    {slide.subtitle}
                                </p>
                            ) : null}
                        </div>
                    </div>
                ))}
            </div>

            <div className="absolute bottom-4 left-1/2 flex -translate-x-1/2 gap-2">
                {slides.map((_, index) => (
                    <span
                        key={index}
                        className={`h-2 w-2 rounded-full transition-colors duration-300 ${
                            index === currentIndex ? "bg-white" : "bg-white/50"
                        }`}
                        aria-label={`Aller à la diapositive ${index + 1}`}
                    />
                ))}
            </div>
        </div>
    );
};

export default Banner;
