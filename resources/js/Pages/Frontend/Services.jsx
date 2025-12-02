import React, { useEffect, useState } from "react";
import axios from "axios";

export default function Services() {
    const [services, setServices] = useState([]);

    useEffect(() => {
        axios.get("/api/services").then((res) => {
            setServices(res.data);
        });
    }, []);

    return (
        <section className="py-16 bg-white">
            <div className="max-w-6xl mx-auto text-center">
                <h2 className="text-4xl font-bold mb-10">Our Services</h2>

                <div className="grid grid-cols-1 md:grid-cols-3 gap-10">
                    {services.map((service) => (
                        <div key={service.id} className="shadow-lg rounded-lg p-5 bg-gray-50">
                            <img
                                src={`/storage/${service.image}`}
                                className="w-full h-40 object-cover rounded"
                            />

                            <h3 className="text-xl font-bold mt-4">{service.title}</h3>
                            <p className="text-gray-600 mt-2">{service.intro}</p>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}