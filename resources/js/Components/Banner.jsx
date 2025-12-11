import React from "react";

export default function Banner() {
    return (
        <div
            className="w-full h-[70vh] md:h-[100vh] bg-cover bg-center flex items-center justify-center text-black"
            style={{
                backgroundImage: "url('/images/bannerhero.png')"
            }}
        >
            <div className='text-center '>
        
        <h1 class="fly-letters text-[28px] xl:text-[58px] sm:text-[28px] font-extrabold xl:leading-[80px] leading-[40px]   sm:leading-[40px]">
  <span>D</span><span>r</span><span>i</span><span>v</span><span>i</span><span>n</span><span>g</span> 
  <span>N</span><span>e</span><span>x</span><span>t</span><span>-</span><span>G</span><span>e</span><span>n</span><span>e</span><span>r</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><br></br>
  <span>C</span><span>o</span><span>n</span><span>n</span><span>e</span><span>c</span><span>t</span><span>i</span><span>v</span><span>i</span><span>t</span><span>y</span>
</h1>
        <p className='text-[24px] mt-3'>NBN Contracting Services</p>
        
      </div>
        </div>
    );
}