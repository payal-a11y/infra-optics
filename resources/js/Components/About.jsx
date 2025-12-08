import React, { useEffect } from 'react'
// import projectdel from '/images/projectdel.svg'
import cable from '../../../public/images/cable.svg'
import rope from '../../../public/images/rope.svg'
import projectdel from "../../../public/images/projectdel.svg";
import single from "../../../public/images/aboutsingle.png";

export default function About() {
    useEffect(() => {
    // ✅ Manually initialize Flowbite accordion after component mounts
    import("flowbite").then(({ initAccordions }) => {
      initAccordions();
    });
  }, []);
  return (
    <div>
            <section id="about" className="hero text-center">
        <div className="max-w-screen-xl mx-auto">
          <div className="grid grid-cols-1 xl:grid-cols-12 items-start gap-10">
            {/* Left side */}
            <div
              className="xl:col-span-4 sm:col-span-6 p-8 xl:p-15 md:p-8 lg:p-15 sm:p-8 bg-cover bg-center"
              style={{ backgroundImage: `url(${single})` }}
            >
              <div className="text-center text-white text-[20px] flex flex-col gap-10 xl:gap-15 md:gap-15 lg:gap-15 sm:gap-10">
                <div className="main-services">
                  <img src={projectdel} alt="" className="block m-auto mb-5" />
                  <h5 className="font-bold">X2P Project Delivery</h5>
                </div>
                <div className="main-services">
                  <img src={cable} alt="" className="block m-auto mb-5" />
                  <h5 className="font-bold">Cable Hauling</h5>
                </div>
                <div className="main-services">
                  <img src={rope} alt="" className="block m-auto mb-5" />
                  <h5 className="font-bold">Rod & Roping</h5>
                </div>
              </div>
            </div>

            {/* Right side */}
            <div className="xl:col-span-8 sm:col-span-6 text-start p-4 xl:pl-0 md:pl-4 lg:pl-0">
              <h5 className="text-[#E11E3B] text-[24px] md:mt-10">Welcome To</h5>
              <h2 className="text-[28px] md:text-[48px] font-bold">INFRA OPTICS</h2>
              <p className="text-[20px] xl:text-[36px] md:text-[36px] lg:text-[36px] sm:text-[22px]">
                Infra Optics is a growing entity in the realm of
                telecommunications, specializing in NBN Contracting Services.
              </p>
              <p className="text-[18px] leading-[34px] mt-5">
                With our steadfast dedication to quality and an unwavering
                commitment to client satisfaction, we aim to emerge as a trusted
                partner poised to elevate connectivity standards in the digital
                age. As we continue to grow, we remain dedicated to fostering
                meaningful partnerships and exceeding expectations in every
                endeavour. With a focus on innovation and customer-centricity,
                Infra Optics is poised to make significant strides in shaping
                the future of telecommunications.
              </p>

              {/* ✅ Accordion Section */}
              <div
                id="accordion-flush"
                data-accordion="collapse"
                data-accordion-type="flush"
                data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400"
                className="mt-5"
              >
                <h2 id="accordion-flush-heading-1">
                  <button
                    type="button"
                    className="flex items-center justify-between w-full py-5 font-medium rtl:text-right px-3 text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-1"
                    aria-expanded="false"
                    aria-controls="accordion-flush-body-1"
                  >
                    <p className="text-[#E11E3B] text-[22px] font-bold">
                      Check Company Structure
                    </p>
                    <svg
                      data-accordion-icon
                      className="w-3 h-3 rotate-180 shrink-0"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M9 5 5 1 1 5"
                      />
                    </svg>
                  </button>
                </h2>
                <div
                  id="accordion-flush-body-1"
                  className="hidden"
                  aria-labelledby="accordion-flush-heading-1"
                >
                  <div className="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p className="mb-2 text-[#292929] text-[18px]">
                      Infra Optics was founded by a motivated group of
                      professionals driven by a vision of excellence. We
                      meticulously execute each project, adhering to
                      industry-leading standards and best practices. Our team of
                      skilled professionals brings forth a wealth of experience,
                      ensuring seamless project management and timely delivery
                      of results.
                      
                      The company is led by Mr. Tarun as the managing director.
                      With valuable and multidisciplinary experience since 2006
                      after graduating from Electronics and Telecommunication
                      Engineering, he is one of the founding members of Infra
                      Optics.
                      
                      Financial and contractual management portfolio is under
                      the watch of Seema Chahal. She holds a master’s degree in
                      technology and 11 years of experience in managing several
                      regulated businesses, including RTOs and disability
                      services.
                      
                      Currently, we have five crews working in N2P and rod and
                      rope projects in Perth metro and regional areas. We are
                      looking to expand our area of operation by forming a
                      mutually beneficial relationship with your company.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
