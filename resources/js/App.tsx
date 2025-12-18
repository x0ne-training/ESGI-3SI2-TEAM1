import React from "react";
import "@/css/app.css";
import Banner from "@/components/Banner";

const App = () => {
    return (
        <div className="mx-auto flex max-w-5xl flex-col gap-6 px-4 py-8">
            <Banner />
            <div className="text-lg font-semibold text-slate-800">Hello From React</div>
        </div>
    );
};

export default App;
