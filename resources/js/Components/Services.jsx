import React from "react";

export default function Services() {
    const services = [
        {
            id: 1,
            name: "Infrastructure Planning",
            image: "/images/service1.jpg",
            intro: "Smart, scalable planning for your infrastructure needs.",
        },
        {
            id: 2,
            name: "Optical Fiber Deployment",
            image: "/images/service2.jpg",
            intro: "High-quality fiber deployment executed with precision.",
        },
        {
            id: 3,
            name: "Network Maintenance",
            image: "/images/service3.jpg",
            intro: "Reliable and efficient network support & monitoring.",
        },
    ];

    return (
        <div className=" max-w-screen-xl mx-auto px-5 pb-16 grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            {services.map((service) => (
                <div key={service.id} className="shadow-lg rounded-lg overflow-hidden ">
                    <img src={service.image} className="w-full h-48 object-cover" />
                    <div className="p-5 text-center">
                        <h3 className="text-xl font-semibold">{service.name}</h3>
                        <p className=" mt-2">{service.intro}</p>
                    </div>
                </div>
            ))}
        </div>
    );
}