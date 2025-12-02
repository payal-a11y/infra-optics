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
                            className="h-12"
                        />
                    </Link>

                    {/* Menu */}
                    <ul className="flex items-center gap-8 text-black font-medium">
                        <li><Link href="/">Home</Link></li>
                        <li><Link href="/about">About</Link></li>
                        <li><Link href="/services">Services</Link></li>
                        <li><Link href="/contact">Contact</Link></li>
                    </ul>

                    {/* Button */}
                    <Link 
                        href="/contact"
                        className="ml-6 px-6 py-2 text-black rounded-full hover:bg-transparent hover:text-black transition"
                    >
                        Get in touch
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
