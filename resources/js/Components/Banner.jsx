import React from "react";

export default function Banner() {
    return (
        <div
            className="w-full h-[70vh] bg-cover bg-center flex items-center justify-center text-black"
            style={{
                backgroundImage: "url('/images/bannerhero.png')"
            }}
        >
            <div className="text-center px-4">
                <h1 className="text-4xl md:text-6xl font-bold drop-shadow-lg">
                   DrivingNext-Generation <br />
                   Connectivity
                </h1>

                <p className="mt-4 text-lg md:text-2xl font-light drop-shadow-lg">
                    NBN Contracting Services


                </p>
            </div>
        </div>
    );
}