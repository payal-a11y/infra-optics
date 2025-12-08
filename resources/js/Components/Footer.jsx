import React from "react";
import infralogo from "../../../public/images/infralogo.png";
import location from "../../../public/images/location.svg";
import clock from "../../../public/images/clock.svg";
import Floatingicons from "./FloatingIcons";

export default function Footer() {
    return (
        <footer className=" text-black pt-16 pb-8">
            <div className="max-w-screen-xl mx-auto px-6">
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
                    {/* Logo + Description */}
                    <div className="lg:col-span-4">
                        <a href="/" className="inline-block mb-6">
                            <img
                                src={infralogo}
                                alt="Infra Optics Logo"
                                className="w-[180px] lg:w-[220px]"
                            />
                        </a>
                        <p className="text-lg leading-relaxed text-black">
                            Driving next-generation <br />
                            telecommunications across Australia.
                        </p>
                    </div>

                    {/* Quick Links */}
                    <div className="lg:col-span-2">
                        <h4 className="text-xl font-bold mb-6 text-orange-500">Quick Links</h4>
                        <ul className="space-y-3">
                            <li>
                                <a href="#home" className="text-lg hover:text-orange-400 transition">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about" className="text-lg hover:text-orange-400 transition">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#services" className="text-lg hover:text-orange-400 transition">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#contact" className="text-lg hover:text-orange-400 transition">
                                    Get in Touch
                                </a>
                            </li>
                        </ul>
                    </div>

                    {/* Services List */}
                    <div className="lg:col-span-3">
                        <h4 className="text-xl font-bold mb-6 text-orange-500">Our Services</h4>
                        <ul className="space-y-3 text-lg">
                            <li>
                                <a href="#services" className="hover:text-orange-400 transition">
                                    X2P project delivery
                                </a>
                            </li>
                            <li>
                                <a href="#services" className="hover:text-orange-400 transition">
                                    Cable hauling
                                </a>
                            </li>
                            <li>
                                <a href="#services" className="hover:text-orange-400 transition">
                                    Rod and roping
                                </a>
                            </li>
                            <li>
                                <a href="#services" className="hover:text-orange-400 transition">
                                    Complex remediation
                                </a>
                            </li>
                            <li>
                                <a href="#services" className="hover:text-orange-400 transition">
                                    Minor civil
                                </a>
                            </li>
                        </ul>
                    </div>

                    {/* Contact Info */}
                    <div className="lg:col-span-3">
                        <h4 className="text-xl font-bold mb-6 text-orange-500">Get In Touch</h4>
                        <div className="space-y-6">
                            <div className="flex gap-4">
                                <img src={location} alt="Location" className="w-6 h-6 mt-1 flex-shrink-0" />
                                <p className="text-lg text-black">
                                    2232b Albany Highway
                                    <br />
                                    Gosnells WA 6110
                                </p>
                            </div>
                            <div className="flex gap-4">
                                <img src={clock} alt="Hours" className="w-6 h-6 mt-1 flex-shrink-0" />
                                <div>
                                    <p className="text-lg">Monday – Friday</p>
                                    <p className="text-lg text-black">7:00 AM – 5:00 PM</p>
                                    <p className="text-lg text-black">Saturday & Sunday – Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Copyright */}
                
            </div>
            <div className="mt-8     pt-4 border-t border-gray-800 text-center">
                    <p className="text-lg">
                        Copyright © {new Date().getFullYear()} infraoptics• All rights reserved
                    </p>
                </div>
                <Floatingicons />
        </footer>
    );
}