import React from "react";
import FrontendLayout from "../Layouts/FrontendLayout";
import Banner from "../Components/Banner";
import ServicesList from "../Components/ServicesList";
import { usePage } from "@inertiajs/react";
import ContactUs from "@/Components/ContactUs";
import About from "@/Components/About";
import Partners from "@/Components/Partners";
import Solutions from "@/Components/Solutions";

export default function Home({ services }) {
    return (
        <FrontendLayout>
            <Banner />
            <About />
            <Partners/>
            <Solutions/>
            <div className="p-10 text-center">
                <h2 className="text-[28px] md:text-[48px] font-bold">Our Services</h2>
                <p className="mt-2 text-[18px] text-gray-600">Our current crew is experienced in the following skills</p>
            </div>


            <ServicesList services={services} />
            <ContactUs />
        </FrontendLayout>
    );
}