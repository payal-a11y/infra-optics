export default function ServicesList({ services = [] }) {
    return (
        <div className="max-w-6xl mx-auto px-5 pb-16 grid md:grid-cols-3 gap-8">
            {services.map((service) => (
                <div
                    key={service.id}
                    className="shadow-lg rounded-lg overflow-hidden bg-white"
                >
                    {service.image && (
                        <img
                            src={`/storage/${service.image}`}
                            alt={service.title}
                            className="w-full h-48 object-cover"
                        />
                    )}

                    <div className="p-5 text-center">
                        <h3 className="text-xl font-semibold">
                            {service.title}
                        </h3>
                        <p className="text-gray-600 mt-2">
                            {service.intro}
                        </p>
                    </div>
                </div>
            ))}
        </div>
    );
}