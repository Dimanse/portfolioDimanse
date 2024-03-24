/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
        extend: {
          screens:{
              print:{ raw: 'print' },
          }
        },
      },
    plugins: [],
  }

