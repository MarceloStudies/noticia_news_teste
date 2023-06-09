/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        facebook: '#3B5999',
        twitter: '#1DA1F2',
        envelope: '#FFD700',
        telegram: '#0088CC',
        whatsapp: '#25D366',
      },
    },
  },
  plugins: [],
}
