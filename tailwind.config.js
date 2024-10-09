/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container :{
      center : true,
      padding : '16px'
    },
    extend: {
      colors : {
        'hitam' :'#0C0A1F',
        'ungu' : '#5D3CB1'
      },
    },
  },
  plugins: [],
}

