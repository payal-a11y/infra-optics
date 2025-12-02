import { useForm } from "@inertiajs/react";

export default function Create() {
    const { data, setData, post } = useForm({
        title: "",
        intro: "",
        image: null,
    });

    function submit(e) {
        e.preventDefault();
        post("/admin/services");
    }

    return (
        <form className="max-w-xl mx-auto p-8" onSubmit={submit}>
            <h1 className="text-2xl font-bold mb-5">Add Service</h1>

            <input
                type="text"
                className="border p-2 mb-4 w-full"
                placeholder="Service Title"
                onChange={(e) => setData("title", e.target.value)}
            />

            <textarea
                className="border p-2 mb-4 w-full"
                placeholder="Intro"
                onChange={(e) => setData("intro", e.target.value)}
            />

            <input
                type="file"
                className="border p-2 mb-4 w-full"
                onChange={(e) => setData("image", e.target.files[0])}
            />

            <button className="px-4 py-2 bg-blue-600 text-white rounded">
                Save Service
            </button>
        </form>
    );
}