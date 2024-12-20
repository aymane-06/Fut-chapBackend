/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./docs/**/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        "Poppins": ["Poppins"],
      },
      backgroundImage:{
        bodyBG: "url('https://www.futbin.com/design2/img/static/frontpage_bg.png')",
        tyBG: "url('https://cdn.futbin.com/design/img/builder_imgs/23/pos_base.png')",
      }
    },
  },
  plugins: [],
}