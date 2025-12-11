import React, { useState } from "react";

export default function FrontendLayout({ children }) {
    const [menuOpen, setMenuOpen] = useState(false);

    return (
        <div className="min-h-screen flex flex-col">

            {/* Transparent Header */}
            <header className="absolute top-0 left-0 w-full z-50 bg-transparent">
                <nav className="flex items-center justify-between px-8 py-4">

                    {/* Logo */}
                    <a href="/">
                        <img
                            src="/images/infralogo.png"
                            alt="Logo"
                            className="w-[110px] xl:w-[200px] sm:w-[110px]"
                        />
                    </a>

                    {/* Desktop Menu */}
                    <ul className="hidden md:flex items-center gap-14 text-[18px] text-black font-medium">
                        <li className="hover:text-[#e43739]"><a href="/">Home</a></li>
                        <li className="hover:text-[#e43739]"><a href="/about">About</a></li>
                        <li className="hover:text-[#e43739]"><a href="/services">Services</a></li>
                        <li className="hover:text-[#e43739]"><a href="/contact">Contact</a></li>
                    </ul>

                    {/* Desktop Button */}
                    <a
                        href="/contact"
                        className="hidden md:flex px-6 py-2 xl:text-[22px] gap-3 items-center font-extrabold text-black rounded-full hover:text-[#e43739] transition"
                    >
                        <img src="/images/headphone.svg" alt="" className="w-[36px] sm:w-[40px]" />
                        Get in Touch
                    </a>

                    {/* Mobile Hamburger */}
                    <button
                        className="md:hidden block"
                        onClick={() => setMenuOpen(!menuOpen)}
                    >
                        {menuOpen ? (
                            /* X Icon */
                            <svg xmlns="http://www.w3.org/2000/svg" className="w-7 h-7" fill="none" stroke="currentColor" strokeWidth="2">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        ) : (
                            /* Hamburger Icon */
                            <svg xmlns="http://www.w3.org/2000/svg" className="w-7 h-7" fill="none" stroke="currentColor" strokeWidth="2">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M3 6h18M3 12h18M3 18h18" />
                            </svg>
                        )}
                    </button>
                </nav>

                {/* Mobile Menu */}
                {menuOpen && (
                    <div className="md:hidden bg-white shadow px-8 py-6 space-y-6 text-[18px] font-medium">

                        <a
                            href="/"
                            className="block hover:text-[#e43739]"
                            onClick={() => setMenuOpen(false)}
                        >
                            Home
                        </a>

                        <a
                            href="/about"
                            className="block hover:text-[#e43739]"
                            onClick={() => setMenuOpen(false)}
                        >
                            About
                        </a>

                        <a
                            href="/services"
                            className="block hover:text-[#e43739]"
                            onClick={() => setMenuOpen(false)}
                        >
                            Services
                        </a>

                        <a
                            href="/contact"
                            className="block hover:text-[#e43739]"
                            onClick={() => setMenuOpen(false)}
                        >
                            Contact
                        </a>

                        {/* Mobile CTA */}
                        <a
                            href="/contact"
                            className="inline-flex items-center justify-start gap-3 bg-[#e43739] text-white px-5 py-3 rounded-full"
                            onClick={() => setMenuOpen(false)}
                        >
                            <img src="/images/headphone.svg" alt="" className="w-[32px]" />
                            Get in Touch
                        </a>


                    </div>
                )}

            </header>

            {/* Body */}
            <main className="flex-grow">{children}</main>
        </div>
    );
}
