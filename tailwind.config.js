module.exports = {
  content: ["./templates/*.{php,js}","./templates/**/*.{php,js}","./ajax/*.{php,js}"],
  theme: {
    extend: {
      fontFamily:{
        'Viaoda': ['Viaoda Libre','cursive']
      },
    	backgroundPosition:{
    		'left-center': 'left center',
    		'right-center': 'right center',
        'top-center': 'top center',
        'bottom-center': 'bottom center',
    	}
    },
  },
  plugins: [
  	require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp')
  ],
}