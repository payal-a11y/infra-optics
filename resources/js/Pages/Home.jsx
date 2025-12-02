import React from "react";
import FrontendLayout from "../Layouts/FrontendLayout";
import Banner from "../Components/Banner";
import ServicesList from "../Components/ServicesList";
import { usePage } from "@inertiajs/react";

export default function Home({ services }) {
    return (
        <FrontendLayout>
            <Banner />

            <div className="p-10 text-center">
                <h2 className="text-3xl font-bold">Our Services</h2>
                <p className="mt-2 text-gray-600">Our current crew is experienced in the following skills</p>
            </div>

            <ServicesList services={services} />
        </FrontendLayout>
    );
}