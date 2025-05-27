/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'blue': {
          100: '#E6F4FF',
          200: '#CCE9FF',
          300: '#99D3FF',
          400: '#66BDFF',
          500: '#33A7FF',
          600: '#0091FF',
          700: '#006DBF',
          800: '#004980',
          900: '#002440',
        },
        'cream': {
          100: '#FFFBF0',
          200: '#FFF7E6',
          300: '#F5E6CC',
          400: '#E6D5B8',
          500: '#D4C4A4',
          600: '#BFB091',
          700: '#A69C7D',
          800: '#8C8569',
          900: '#736D55',
        },
        'dark': '#1A1A1A',
      },
    },
  },
  plugins: [],
} 