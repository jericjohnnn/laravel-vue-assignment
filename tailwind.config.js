/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      borderRadius: {
        '6xl': '2.5rem',
      },
      colors: {
        'blue': '#25BEF5',
        'white': '#FFFFFF',
        'black': '#3B3B3C',
        'hcolortop': '#5BD4FF',
        'hcolorbot': '#0CB2EE',
      },
      backgroundImage: {
        'herobg': "url('/resources/assets/images/herobg.svg')", 
        'servicesbg': "url('/resources/assets/images/servicesbg.svg')", 
      },
      fontFamily: {
        'montserrat': "'Montserrat', sans-serif", 
        'hind': "'Hind', sans-serif",
      },
    },
  },
  plugins: [],
};
