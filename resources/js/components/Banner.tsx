import React, { useState, useEffect } from "react";

interface Slide {
    image: string;
    title: string;
    subtitle?: string;
}

export default function Banner() {
    const slides: Slide[] = [
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
    ];

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
                        key={index}
                        className={`absolute inset-0 transition-opacity duration-700 ${
                            index === currentIndex
                                ? "opacity-100"
                                : "opacity-0"
                        }`}
                    >
                        <img
                            src={slide.image}
                            alt={slide.title}
                            className="h-full w-full object-cover"
                        />

                        <div className="absolute inset-0 bg-black/40 flex flex-col justify-center px-6 text-white">
                            <h2 className="text-2xl font-bold md:text-3xl">
                                {slide.title}
                            </h2>

                            {slide.subtitle && (
                                <p className="mt-2 text-sm md:text-base text-white/80">
                                    {slide.subtitle}
                                </p>
                            )}
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
