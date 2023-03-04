/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {
      colors:
      {uaninicio:'#216DB1',
       uanfinal: '#0E3F66',
       uancentro: '#1B5F9B',

       },
       screens: {
        'tablet': '640px',
        // => @media (min-width: 640px) { ... }
  
        'laptop': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
      },
    },
  },
  plugins: [],
}
