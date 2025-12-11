import React from 'react'
import fibre from '../../../public/images/fibre.png'
import shield from '../../../public/images/shield.svg'

export default function Solutions() {
  return (
    <div>
      <section className=''>
      <div className='max-w-screen-xl m-auto p-4 '>
        <img src={fibre} alt='' className='mt-12' />
        
        <h2 className='text-[28px] md:text-[48px] font-bold text-center mt-6'>Your Solutions to Fibre Optic Connectivity</h2>
        <div className='grid  md:grid-cols- sm:grid-cols-1  xl:grid-cols-3 text-center mt-12 '>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 w-[92%]'><span><img src={shield} alt='' className='' /></span>Expert Installation</p>
          </div>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 w-[95%]'><span><img src={shield} alt='' className='' /></span>Zero Downtime</p>
          </div>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 w-[100%]'><span><img src={shield} alt='' className='' /></span>High-Speed Connectivity</p>
          </div>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 xl:mb-0 md:mb-4 lg:mb-4 sm:mb-4 w-[100%]'><span><img src={shield} alt='' className='' /></span>Future-Ready Network</p>
          </div>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 xl:mb-0 md:mb-4 lg:mb-4 sm:mb-4 w-[100%]'><span><img src={shield} alt='' className='' /></span>Quality Assurance</p>
          </div>
          <div>
            <p className='flex items-center justify-start xl:justify-center md:justify-start lg:justify-center sm:justify-start gap-3 mb-4 xl:mb-0 md:mb-4 lg:mb-4 sm:mb-4 w-[91%]'><span><img src={shield} alt='' className='' /></span>End-to-End Support</p>
          </div>

        </div>
      </div>
      <div className='border-t border-18 border-[#E11E3B] mt-10'></div>
    </section>
    </div>
  )
}
