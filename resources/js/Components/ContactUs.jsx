import React from 'react'

export default function ContactUs() {
  return (
    <div>
      <section id="contact" className='bg-[#FFFCF8] mt-12 py-12'>
        <div className='max-w-screen-xl m-auto p-4'>
            <div className='grid grid-cols-1 xl:grid-cols-12 gap-8'>
                <div className='col-span-6 xl:col-span-8 md:col-span-6 lg:col-span-4 sm:col-span-6'>
                    <h2 className='text-[28px] md:text-[48px] font-bold pb-5'>Connect With Us</h2>
                    <form className='flex flex-col gap-5'>
                        
                        <input className='w-[100%] border-b-1 p-2' type='text' placeholder='Your Name' id='name' required/>
                        <input className='w-[100%] border-b-1 p-2' type='text' placeholder='Your Address, Perth Australia' id='address' required/>
                        <div className='flex gap-3 '>
                            <div className='w-[100%]'><input className='w-[100%] border-b-1 p-2' type='text' placeholder='City' id='city' required/></div>
                            <div className='w-[100%]'><input className='w-[100%] border-b-1 p-2' type='text' placeholder='State / Province / Region' id='state' required/></div>
                        </div>
                        <input className='w-[100%] border-b-1 p-2' type='text' placeholder='Your Email' id='email' required/>
                        <input className='w-[100%] border-b-1 p-2' type='text' placeholder='Phone Number' id='phone' required/>
                        <textarea type='message' className='w-[100%] border-1 p-2 mt-2' rows={4} placeholder='Message'/>
                        <button type='submit' class="bg-gradient-to-l from-[#F69F17] to-[#E11E3B] text-white font-semibold py-3 px-8 mt-2 rounded-full hover:opacity-90 transition duration-300 w-[60%] xl:w-[34%] md:w-[34%] lg:w-[24%] sm:w-[60%] text-[18px]">Send Message</button>
                        
                    </form>
                </div>
                <div className='col-span-6 xl:col-span-4 md:col-span-6 lg:col-span-4 sm:col-span-6'>
                    <div className='bg-white h-[100%] p-5'>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.9254896691136!2d115.99955997491575!3d-32.0712639739665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32957316d67af7%3A0xcd32c7bcb562820a!2s2232B%20Albany%20Hwy%2C%20Gosnells%20WA%206110%2C%20Australia!5e0!3m2!1sen!2sin!4v1760159358017!5m2!1sen!2sin"
    width="100%"
    height="600"
    style={{ border: 0 }}
    allowFullScreen=""
    loading="lazy"
    referrerPolicy="no-referrer-when-downgrade"
    title="Google Map"
  ></iframe>
</div>
                </div>
            </div>
        </div>
    </section>
    </div>
  )
}
