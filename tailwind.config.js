/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,js,php}',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    screens: {
      '2xsm': '256px',
      // => @media (min-width: 640px) { ... } 
      //Mobile

      'xsm': '512px',
      // => @media (min-width: 640px) { ... } 
      //Tablet

      'sm': '768px',
      // => @media (min-width: 640px) { ... } 
      //Tablet

      'md': '1024px',
      // => @media (min-width: 1024px) { ... }
      //laptop

      'lg': '1280px',
      // => @media (min-width: 1280px) { ... }
      //desktop
    },
    extend: {
      /*maxWidth: {
        'max-xsm': '200px',
        'max-sm': '640px',
        'max-md': '768px',
        'max-lg': '1024px',
        'max-xl': '1280px',
      },*/
      keyframes: {
        changecol: {
          '0%':   {color: 'red'},
          '25%': {color: '#2E4049'},
          '50%':  {color: 'red'},
          '100%': {color: '#2E4049'},
        },
        wiggle: {
          '0%, 100%': { transform: 'rotate(-25deg)' },
          '50%': { transform: 'rotate(25deg)' },
        },
        move:{
          '0%':   {width: '5%'},
          '25%': {width: '34%'},
          '50%':  {width: '67%'},
          '100%': {width: '67%'},
        }
      },
      fontFamily: {
        Sue:['Sue Ellen Francisco', 'cursive'], 
        Mincho:['Shippori Mincho', 'serif'],
        Wsans:['Work Sans', 'sans-serif'],
      },
      colors:{
        'middleblue': '#77D7D3',
        'pastelred': '#FF6D6D',
        'japaneseindigo': '#2E4049',
        'japaneseindigo2': '#59c9c4',
        
      },
      backgroundImage: {
        'greenbg': "url('bg (2).png')"
      }
    },
    
  },
  plugins: [
    require('flowbite/plugin')
  ],

}

