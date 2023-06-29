/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    //"./resources/**/*.js",
    //"./resources/**/*.vue",
  ],
  theme: { 
    extend: {
      keyframes: {
        marquee: {
          'from': {right: '-150px'},
	        'to': {right: '2070px'},
        }
      },
      animation: {
        marquee: 'marquee 20s linear infinite',
      },
      colors: {
        main: '#871414',
        light: '#f3e5e0',
      },
    },
    fontFamily: {
      'sans' : ['ibm plex sans', 'sans-serif'],
    }
  },
  plugins: [],
}

