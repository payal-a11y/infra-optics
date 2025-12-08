import React from "react";
import { Link } from "@inertiajs/react";

export default function FrontendLayout({ children }) {
    return (
        <div className="min-h-screen flex flex-col">

            {/* Transparent Header OVER Banner */}
            <header className="absolute top-0 left-0 w-full z-50 bg-transparent">
                <nav className="flex items-center justify-between px-8 py-4">
                    
                    {/* Logo */}
                    <Link href="/">
                        <img 
                            src="/images/infralogo.png" 
                            alt="Logo" 
                            className="w-[110px] xl:w-[200px] sm:w-[110px]"
                        />
                    </Link>

                    {/* Menu */}
                    <ul className="flex items-center gap-14 text-[18px] text-black font-medium">
                        <li className="hover:text-[#e43739]"><Link href="/">Home</Link></li>
                        <li className="hover:text-[#e43739]"><Link href="/about">About</Link></li>
                        <li className="hover:text-[#e43739]"><Link href="/services">Services</Link></li>
                        <li className="hover:text-[#e43739]"><Link href="/contact">Contact</Link></li>
                    </ul>

                    {/* Button */}
                    <Link 
                        href="/contact"
                        className=" px-6 py-2 xl:text-[22px] flex gap-3 text-center justify-center align-middle font-extrabold text-black rounded-full hover:bg-transparent hover:text-[#e43739] transition"
                    > <img src="/images/headphone.svg" alt="" className="w-[36px]  sm:w-[40px]"/>
                        Get in Touch
                    </Link>
                </nav>
            </header>

            {/* Page Body */}
            <main className="flex-grow">
                {children}
            </main>
        </div>
    );
}
