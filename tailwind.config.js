/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      fontFamily: {
        'teachers': ['Teachers', 'sans-serif'],
        'poetsen': ['Poetsen One', 'sans-serif']
      },
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#0049ff",
          "primary-content": "#cce0ff",
          "secondary": "#0092ff",
          "secondary-content": "#000816",
          "accent": "#00f5ff",
          "accent-content": "#001516",
          "neutral": "#0b1918",
          "neutral-content": "#c8cbcb",
          "base-100": "#e6ffff",
          "base-200": "#c8dede",
          "base-300": "#abbebe",
          "base-content": "#131616",
          "info": "#0094e8",
          "info-content": "#000813",
          "success": "#00ebae",
          "success-content": "#00130b",
          "warning": "#ffb700",
          "warning-content": "#160c00",
          "error": "#da0038",
          "error-content": "#ffd7d6"
        },
      },
    ],
  },
  plugins: [require('daisyui')],
}

