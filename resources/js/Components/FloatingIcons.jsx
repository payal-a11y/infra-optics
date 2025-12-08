import React from 'react'
import fb from '../../../public/images/fb.svg'
import ld from '../../../public/images/ld.svg'
import twitter from '../../../public/images/twitter.svg'
export default function FloatingIcons() {
  return (
    <div>
      <div className="fixed top-[40%] right-4 z-50 flex flex-col space-y-3">
      <a
        href="https://facebook.com"
        target="_blank"
        rel="noopener noreferrer"
        className=""
      >
       <img src={fb} alt='' className='w-[100%]'/>
      </a>

      <a
        href="https://instagram.com"
        target="_blank"
        rel="noopener noreferrer"
        className=""
      >
        <img src={ld} alt='' className='w-[100%]'/>
      </a>

      <a
        href="https://twitter.com"
        target="_blank"
        rel="noopener noreferrer"
        className=""
      >
        <img src={twitter} alt='' className='w-[100%]'/>
      </a>
    </div>
    </div>
  )
}
