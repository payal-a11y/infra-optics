export default function ServicesList({ services = [] }) {
    return (
        <div className="max-w-screen-xl mx-auto px-5 pb-16 grid  xl:grid-cols-3 lg:grid-cols-2  md:grid-cols-1  gap-8">
            {services.map((service) => (
                <div
                    key={service.id}
                    className="shadow-lg rounded-lg overflow-hidden bg-white hover:bg-[#e42e37] hover:text-[#fff] duration-300 hover:scale-105"
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
                        <p className=" mt-2">
                            {service.intro}
                        </p>
                    </div>
                </div>
            ))}
        </div>
    );
    
}