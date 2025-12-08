import React from "react";

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

    return (
        <div className="relative w-full overflow-hidden rounded-2xl bg-slate-900 shadow-xl">
            <div className="relative h-64 md:h-80">
                <div className="absolute inset-0 flex h-full w-full items-center justify-center">
                    <p className="text-white">Banner placeholder</p>
                </div>
            </div>
        </div>
    );
}
