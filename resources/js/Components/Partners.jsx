import React from 'react'
import circlegraphic from '../../../public/images/circlegraphic.svg'
import circlegraphictwo from '../../../public/images/circlegraphictwo.svg'
import satisfy from '../../../public/images/satisfy.svg'
import toprating from '../../../public/images/toprating.svg'
import fast from '../../../public/images/fast.svg'
import lifetime from '../../../public/images/lifetime.svg'

export default function Partners() {
  return (
    <>
      <section className='bg-[#FFFCF8] pb-10 xl:pb-20 md:pb-20 lg:pb-20 sm:pb-10'>
    <div className='max-w-screen-xl m-auto text-center p-4  pt-12 xl:pt-0 md:pt-0 lg:pt-0 sm:pt-12'>
      <div className='relative'>
        <img src={circlegraphictwo} alt='' className='absolute left-[-218px] top-[120px] animate-growloop hidden xl:block md:block lf:block sm:hidden '/>
      </div>
        
        <img src={circlegraphic} alt='' className=' ml-auto relative top-[50px] animate-growloop hidden xl:block md:block lf:block sm:hidden'/>
        <h2 className='text-[28px] md:text-[48px] font-bold '>Why Partner With Us</h2>
        <p className='text-[18px] mt-5'>Reliable NBN Contracting for seamless <br></br>network builds.</p>

        <div className='grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1  xl:grid-cols-4 text-center gap-8 mt-12'>
            <div>
                <div className='bg-white border-1 border-[#F9D4D7] p-5 mt-18 hover:bg-[#e42e37] hover:text-[#fff] duration-300 shadow-[9px_12px_22px_0px_#0000001a] hover:scale-110'>
                <img src={satisfy} alt='' className='block m-auto mt-[-78px] mb-[18px]'/>
               <h5 className='text-[20px] font-semibold'>100% Satisfaction</h5>
               <p className='text-[16px] mt-2'>Delivering quality you can trust, satisfaction you can feel.</p>
            </div>
            </div>
            <div>
                <div className='bg-white border-1 border-[#F9D4D7] p-5 mt-18 xl:mt-30 md:mt-18 lg:mt-30 sm:mt-18 hover:bg-[#e42e37] hover:text-[#fff] duration-300 shadow-[9px_12px_22px_0px_#0000001a] hover:scale-110'>
                <img src={toprating} alt='' className='block m-auto  mt-[-78px] mb-[18px]'/>
               <h5 className='text-[20px] font-semibold'>Top Rated Services</h5>
               <p className='text-[16px] mt-2'>Delivering Top-Rated Services That Speak for Themselves.</p>
            </div>
            </div>
            <div>
                <div className='bg-white border-1 border-[#F9D4D7] p-5 mt-18 hover:bg-[#e42e37] hover:text-[#fff] duration-300 shadow-[9px_12px_22px_0px_#0000001a] hover:scale-110'>
                <img src={fast} alt='' className='block m-auto  mt-[-78px] mb-[18px]'/>
               <h5 className='text-[20px] font-semibold'>Fast and Efficient</h5>
               <p className='text-[16px] mt-2'>Speed and efficiency that keep your projects on track.</p>
            </div>
            </div>
            <div>
                <div className='bg-white border-1 border-[#F9D4D7] p-5 mt-18 xl:mt-30 md:mt-18 lg:mt-30 sm:mt-18 hover:bg-[#e42e37] hover:text-[#fff] duration-300 shadow-[9px_12px_22px_0px_#0000001a] hover:scale-110'>
                <img src={lifetime} alt='' className='block m-auto  mt-[-78px] mb-[18px]'/>
               <h5 className='text-[20px] font-semibold'>Lifetime Guarantee</h5>
               <p className='text-[16px] mt-2'>Our commitment to you comes with a lifetime guarantee.</p>
            </div>
            </div>
            
        </div>
    </div>

    </section>
    </>
  )
}
