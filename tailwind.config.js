/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily : {
        "inter" : ['inter']
      },
      colors : {
        "pink1" : '#fd4556',
        "pink2" : '#bd3944',
        "darkred" : '#53212b',
        "putih" : 'fffb5f'
      },
      dropShadow :{
        "sm-shadow" : [
          
        ],
      }
    },
  },
  plugins: [],
}

